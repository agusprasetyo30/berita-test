@extends('layouts.layout')

@section('title', 'Daftar Kategori')

@section('content')
<div class="row justify-content-center">
   <div class="col-md-8">
      <div class="card card-default">
         <div class="card-header">
            <h5 class="card-title d-inline">Daftar Kategori</h5>
            <a href="{{ route('admin.kategori.create') }}" class="btn btn-success btn-sm float-right">Add Category</a>
         </div>
         <div class="card-body">
            <table class="table table-bordered table-hover table-striped">
               <thead>
                  <tr>
                     <th>#</th>
                     <th>Kategori</th>
                     <th width=200>Action</th>
                  </tr>
               </thead>
               <tbody>
                  <!--Menampilkan semua kategori-->
                  @foreach ($categories as $key => $category )
                     <tr>
                        <td>{{ ++$key }}. </td>
                        <td>{{ $category->name }}</td>
                        <td>
                           <div class="btn-group-sm">
                              <form action="{{ route('admin.kategori.destroy', $category->id) }}" method="post">
                              <a href="{{ route('admin.kategori.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                 @csrf
                                 @method('delete')
                                 <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                              </form>
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