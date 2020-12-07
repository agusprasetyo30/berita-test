<?php

use App\News;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo "[-] Tambah Berita dalam proses . . . <br>";

        // Menambahkan berita baru
        $news = News::create([
            'title'         => "Berita Hari Ini",
            'slug_title'    => Str::slug("Berita Hari Ini"),
            'news_text'     => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam iure itaque nulla distinctio eligendi in sit, exercitationem aut officia non!",
            'created_by'    => 1, // 1 adalah ID user
        ]);

        echo "[-] Tambah Kategori Berita dalam proses . . . <br>";

        // Menambahkan kategori berita
        $news->categories()->attach([1, 2]);

        echo "[-] Tambah Berita selesai . . . <br>";
    }
}
