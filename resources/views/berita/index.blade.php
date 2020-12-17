@extends('layouts.layout')

@section('title', 'Berita Hari Ini')

@section('content')

   <div class="card">
      <div class="card-header p-3">
         <h4 class="card-title m-0">Daftar berita</h4>
      </div>

      @foreach ($newses as $news)
         <div class="card-body p-2">
            <div class="judul-berita">
               <a href="{{ route('berita.detail', $news->slug_title) }}">{{ $news->title }}</a>
            </div>
            <div class="tanggal-berita">
               <small>{{ date('d M Y', strtotime($news->created_at)) }}</small>
            </div>
            
            <hr>
            
         </div>
      @endforeach
   </div>

@endsection