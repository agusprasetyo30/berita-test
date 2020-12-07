<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('news_id');
            $table->unsignedBigInteger('category_id');

            // Menambahkan relasi ke tabel news
            $table->foreign('news_id')
                ->references('id')
                ->on('news')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            // Menambahkan relasi ke tabel categories
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations / jika dijalankan rollback
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news_categories', function (Blueprint $table) {
            $table->dropForeign(['news_id', 'category_id']);
        });

        Schema::dropIfExists('news');
    }
}
