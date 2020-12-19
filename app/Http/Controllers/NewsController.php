<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newses = News::paginate(5);

        return view('admin.berita.index', compact('newses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.berita.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all(), $request->get('categories')[2]);

        // untuk menyimpan data yang sudah diinputkan
        $news = new News();

        $news->title      = $request->get('judul'); // mengambil inputan berdasarkan nama
        $news->slug_title = Str::slug($request->get('judul')); // membuat data berupa SLUG sesuai dengan judul
        $news->news_text  = $request->get('isi_berita'); // mengambil inputan berdasarkan isi berita
        $news->created_by = \Auth::user()->id; // mengambil ID PENGGUNA yang login

        // untuk menyimpan inputan
        $news->save();

        // Menambahkan kategori yang dipilih
        // dicek apakah data kosong atau tidak
        if ($request->get('categories') != NULL) {
            $news->categories()->attach($request->get('categories'));
        }

        // Kembali ke data index kategori
        return redirect()
            ->route('admin.berita.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        
        // melakukan pencarian kategori berdasarkan ID
        $news = News::where('id', $id)->first();

        // Digunakan untuk menampung data array relasi, yang mana digunakan agar checkbox bisa
        // Tercentang secara otomatis
        $news_category_id = $news->categories->pluck('id')->toArray();

        return view('admin.berita.edit', compact('categories', 'news', 'news_category_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // untuk menyimpan data yang sudah diinputkan
        $news = News::where('id', $id)->firstOrFail();

        $news->title      = $request->get('judul'); // mengambil inputan berdasarkan nama
        $news->slug_title = Str::slug($request->get('judul')); // membuat data berupa SLUG sesuai dengan judul
        $news->news_text  = $request->get('isi_berita'); // mengambil inputan berdasarkan isi berita
        $news->created_by = \Auth::user()->id; // mengambil ID PENGGUNA yang login

        // untuk menyimpan inputan
        $news->save();

        // Menambahkan kategori yang dipilih
        $news->categories()->sync($request->get('categories'));

        // Kembali ke data index kategori
        return redirect()
            ->route('admin.berita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Untuk menghapus berita berdasarkan ID
        News::where('id', $id)->delete();

        // Kembali ke data index kategori
        return redirect()
            ->back();
    }
}
