@extends('layouts.layout')

@section('title', 'Tambah Kategori')

@section('content')
   <div class="row justify-content-center">
      <div class="col-md-6">
         <div class="card card-default">
            <div class="card-header">
               <h5 class="card-title d-inline">Tambah Kategori</h5>
            </div>
            <div class="card-body">
               <form action="{{ route('admin.kategori.store') }}" method="post">
                  @csrf
                  <div class="form-group">
                     <label for="kategori">Nama Kategori</label>
                     <input type="text" name="nama_kategori" id="kategori" 
                        class="form-control" placeholder="Masukan nama kategori" autofocus="on" required>
                  </div>
                  <div class="form-group">
                     <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
@endsection