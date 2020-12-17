<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Digunakan untuk menampung data kategori yang akan di tampilkan ke view
        // di halaman hanya menampilkan 5 kategori
        $categories = Category::paginate(5);

        return view('admin.kategori.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Menampilkan tampilan tambah
        return view('admin.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // untuk menyimpan data yang sudah diinputkan
        $category = new Category;

        $category->name = $request->get('nama_kategori'); // mengambil inputan berdasarkan nama

        // untuk menyimpan inputan
        $category->save();

        // Kembali ke data index kategori
        return redirect()
            ->route('admin.kategori.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // melakukan pencarian kategori berdasarkan ID
        $category = Category::where('id', $id)->first();

        return view('admin.kategori.edit', compact('category'));
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
        // membuat variabel yang fungsinya untuk menampung object yang dicari
        $category = Category::where('id', $id)->firstOrFail();
        
        // menampung inputan data
        $category->name = $request->get('nama_kategori');

        $category->save();

        // Kembali ke data index kategori
        return redirect()
            ->route('admin.kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Untuk menghapus kategori berdasarkan ID
        Category::where('id', $id)->delete();

        // Kembali ke data index kategori
        return redirect()
            ->back();
    }
}
