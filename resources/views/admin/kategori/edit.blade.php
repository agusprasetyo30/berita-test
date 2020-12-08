@extends('layouts.layout')

@section('title', 'Edit Kategori')

@section('content')
   <div class="row justify-content-center">
      <div class="col-md-6">
         <div class="card card-default">
            <div class="card-header">
               <h5 class="card-title d-inline">Edit Kategori</h5>
            </div>
            <div class="card-body">
               <form action="{{ route('admin.kategori.update', $category->id) }}" method="post">
                  @csrf
                  @method('put')
                  <div class="form-group">
                     <label for="kategori">Nama Kategori</label>
                     <input type="text" name="nama_kategori" id="kategori" 
                        class="form-control" placeholder="Masukan nama kategori" 
                        autofocus="on" required value="{{ $category->name }}">
                  </div>
                  <div class="form-group">
                     <button type="submit" class="btn btn-warning btn-sm">Update</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
@endsection