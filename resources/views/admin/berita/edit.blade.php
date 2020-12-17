@extends('layouts.layout')

@section('title', 'Edit Pengguna')

@section('content')
<form action="{{ route('admin.berita.update', $news->id) }}" method="post">
@csrf
   <div class="row justify-content-center">
         <div class="col-md-6">
            <div class="card card-default">
               <div class="card-header">
                  <h5 class="card-title d-inline">Edit Berita</h5>
               </div>
               <div class="card-body">

                  <div class="form-group">
                     <label for="nama">Judul</label>
                     <input type="text" name="judul" id="judul" 
                        class="form-control" placeholder="Masukan judul berita" autofocus="on" required
                        value="{{ $news->title }}">
                  </div>

                  <div class="form-group">
                     <label for="isi_berita">Isi Berita</label>
                     <textarea name="isi_berita" id="isi_berita" cols="30" rows="5" 
                     class="form-control" placeholder="Masukan isi berita">{{ $news->news_text }}</textarea>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card card-default">
               <div class="card-header">
                  <h5 class="card-title d-inline">Tambah Kategori Berita</h5>
               </div>
               <div class="card-body">
                  <!--Melakukan perulangan kategori dan mengecek kategori mana yang dipakai untuk kebutuhan engeditan-->
                  @foreach ($categories as $category)
                     <div>
                        <input type="checkbox" name="categories[]" value="{{ $category->id }}" id="c-{{ $category->id }}"
                           {{ in_array($category->id, $news_category_id) ? ' checked' : '' }}>
                        <label for="c-{{ $category->id }}">{{ $category->name }}</label>
                     </div>
                  @endforeach

                  <div class="form-group">
                     <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </form>
@endsection