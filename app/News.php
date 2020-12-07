<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    // kolom yang boleh diisi
    protected $fillable = ['title', 'slug', 'news_text', 'created_by'];

    /**
     * Many to many ke tabel categories
     *
     * @return void
     */
    public function categories()
    {
        return $this->belongsToMany('App\Category', 'news_categories', 'news_id', 'category_id');
    }

    /**
     * one to many ke tabel users
     *
     * @return void
     */
    public function users()
    {
        return $this->belongsTo('App\User', 'created_by', 'id');
    }

}
