@extends('layouts.layout')

@section('title', 'Tambah Pengguna')

@section('content')
   <div class="row justify-content-center">
      <div class="col-md-6">
         <div class="card card-default">
            <div class="card-header">
               <h5 class="card-title d-inline">Tambah Pengguna</h5>
            </div>
            <div class="card-body">
               <form action="{{ route('admin.pengguna.store') }}" method="post">
                  @csrf
                  <div class="form-group">
                     <label for="nama">Nama Pengguna</label>
                     <input type="text" name="nama" id="nama" 
                        class="form-control" placeholder="Masukan nama pengguna" autofocus="on" required>
                     <!--Menampilkan pesan error jika ada error-->
                     @error('nama')
                        <small class="text-danger">{{ $message }}</small>
                     @enderror
                  </div>
                  <div class="form-group">
                     <label for="email">Email</label>
                     <input type="email" name="email" id="email" 
                        class="form-control" placeholder="Masukan email pengguna" autofocus="on" required>
                     <!--Menampilkan error jika ada error-->
                     @error('email')
                        <small class="text-danger">{{ $message }}</small>
                     @enderror
                  </div>
                  <div class="form-group">
                     <label for="password">Password</label>
                     <input type="password" name="password" id="email" 
                        class="form-control" placeholder="Masukan password pengguna" autofocus="on" required>
                        <!--Menampilkan error jika ada error-->
                     @error('password')
                        <small class="text-danger">{{ $message }}</small>
                     @enderror
                  </div>
                  <div class="form-group">
                     <label for="password_confirmation">Konfirmasi Password</label>
                     <input type="password" name="password_confirmation" id="password_confirmation" 
                        class="form-control" placeholder="Masukan konfirmasi password pengguna" autofocus="on" required>
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