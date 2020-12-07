<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo "[-] Tambah kategori dalam proses . . . <br>";

        for ($i=1; $i <= 2; $i++) { 
            Category::create([
                'name' => 'kategori' . $i,
            ]);
        }

        echo "[+] Tambah kategori sudah selesai . . . <br>";
    }
}
