<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsReaderController extends Controller
{
    /**
     * Digunakan untuk menampilkan daftar berita
     *
     * @return void
     */
    public function dashboard()
    {
        $newses = News::paginate(5);
        return view('berita.index', compact('newses'));
    }

    /**
     * Menampilkan detail berita
     *
     * @return void
     */
    public function detailBerita($slug_title)
    {
        $news = News::where('slug_title', $slug_title)->firstOrFail();

        return view('berita.detail', compact('news'));
    }
}
