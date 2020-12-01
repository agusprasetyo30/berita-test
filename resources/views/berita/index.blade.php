@extends('layouts.layout')

@section('title', 'Berita Hari Ini')

@section('content')

   <div class="card">
      <div class="card-header p-3">
         <h4 class="card-title m-0">Daftar berita</h4>
      </div>
      <div class="card-body p-2">
         <div class="judul-berita">
            <a href="{{ route('coba.detail') }}">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem obcaecati doloremque sint est minima esse.</a>
         </div>
         <div class="tanggal-berita">
            <small>13 Desember 2020</small>
         </div>
         
         <hr>
         
         <div class="judul-berita">
            <a href="{{ route('coba.detail') }}">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem obcaecati doloremque sint est minima esse.</a>
         </div>
         <div class="tanggal-berita">
            <small>13 Desember 2020</small>
         </div>
         
         <hr>

         <div class="judul-berita">
            <a href="{{ route('coba.detail') }}">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem obcaecati doloremque sint est minima esse.</a>
         </div>
         <div class="tanggal-berita">
            <small>13 Desember 2020</small>
         </div>
      </div>
   </div>

@endsection