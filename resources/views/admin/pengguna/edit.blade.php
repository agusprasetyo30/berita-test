@extends('layouts.layout')

@section('title', 'Edit Pengguna')

@section('content')
   <div class="row justify-content-center">
      <div class="col-md-6">
         <div class="card card-default">
            <div class="card-header">
               <h5 class="card-title d-inline">Edit Pengguna</h5>
            </div>
            <div class="card-body">
               <form action="{{ route('admin.pengguna.update', $user->id) }}" method="post">
                  @csrf
                  @method('put')
                  <div class="form-group">
                     <label for="nama">Nama Pengguna</label>
                     <input type="text" name="nama" id="nama" 
                        class="form-control" placeholder="Masukan nama pengguna" autofocus="on" required
                        value="{{ $user->name }}">
                     <!--Menampilkan pesan error jika ada error-->
                     @error('nama')
                        <small class="text-danger">{{ $message }}</small>
                     @enderror
                  </div>
                  <div class="form-group">
                     <label for="email">Email</label>
                     <input type="email" name="email" id="email" 
                        class="form-control" placeholder="Masukan email pengguna" autofocus="on" required
                        value="{{ $user->email }}" disabled>
                     <!--Menampilkan error jika ada error-->
                     @error('email')
                        <small class="text-danger">{{ $message }}</small>
                     @enderror
                  </div>
                  <div class="form-group">
                     <label for="password">Password</label>
                     <input type="password" name="password" id="email" 
                        class="form-control" placeholder="Masukan password pengguna" autofocus="on">
                        
                        <!--Menampilkan error jika ada error-->
                     <small class="">* Isi jika ingin mengganti password pengguna</small>
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