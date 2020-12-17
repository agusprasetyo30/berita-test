@extends('layouts.layout')

@section('title', 'Daftar Pengguna')

@section('content')
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card card-default">
            <div class="card-header">
               <h5 class="card-title d-inline">Daftar Pengguna</h5>
               <a href="{{ route('admin.pengguna.create') }}" class="btn btn-success btn-sm float-right">Tambah Pengguna</a>
            </div>
            <div class="card-body">
               <table class="table table-bordered table-hover table-striped">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th width=200>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <!--Menampilkan semua kategori-->
                     @foreach ($users as $key => $user )
                        <tr>
                           <td>{{ ++$key }}. </td>
                           <td>{{ $user->name }}</td>
                           <td>{{ $user->email }}</td>
                           <td>
                              <div class="btn-group-sm">
                                 <a href="{{ route('admin.pengguna.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                              </div>
                           </td>
                        </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
@endsection