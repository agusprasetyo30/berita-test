@extends('layouts.layout')

@section('title', $news->title)

@section('content')
   <div class="card">
      <div class="card-body">
         <h3>{{ $news->title }}</h3>
         <small>By <b>{{ $news->users->name }}</b> - {{ date('d M Y', strtotime($news->created_at)) }}</small>
         
         <hr>

         <div class="isi-berita">
            {{ $news->news_text }}
         </div>

         <div class="kategori-berita">
            <span class="kategori-title">kategori</span>
            @foreach ($news->categories as $category)
               <a href="#">
                  <span class="badge badge-primary">
                     {{ $category->name }}
                  </span>
               </a>
            @endforeach
            
         </div>
      </div>
   </div>
@endsection