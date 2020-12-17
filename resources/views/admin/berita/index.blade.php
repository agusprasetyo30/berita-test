@extends('layouts.layout')

@section('title', 'Daftar Berita')

@section('content')
<div class="row justify-content-center">
   <div class="col-md-12">
      <div class="card card-default">
         <div class="card-header">
            <h5 class="card-title d-inline">Daftar Berita</h5>
            <a href="{{ route('admin.berita.create') }}" class="btn btn-success btn-sm float-right">Tambah Berita</a>
         </div>
         <div class="card-body">
            <table class="table table-bordered table-hover table-striped">
               <thead>
                  <tr>
                     <th width=50>#</th>
                     <th width=100>Judul</th>
                     <th width=500>Berita</th>
                     <th width=100>Judul Slug</th>
                     <th width=100>Created By</th>
                     <th width=100>Tgl. Buat</th>
                     <th width=100>Action</th>
                  </tr>
               </thead>
               <tbody>
                  <!--Menampilkan semua kategori-->
                  @foreach ($newses as $key => $news )
                     <tr>
                        <td>{{ ++$key }}. </td>
                        <td>{{ $news->title }}</td>
                        <td>{{ $news->news_text }}</td>
                        <td>{{ $news->slug_title }}</td>
                        <td>{{ $news->users->name }}</td>
                        <td>{{ date('d/M/Y', strtotime($news->created_at)) }}</td>
                        <td>
                           <div class="btn-group-sm">
                              <form action="{{ route('admin.berita.destroy', $news->id) }}" method="post">
                              <a href="{{ route('admin.berita.edit', $news->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                 @csrf
                                 @method('delete')
                                 <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                              </form>
                           </div>
                        </td>
                     </tr>
                  @endforeach
               </tbody>
               <tfoot>
                  <tr>
                     <td colspan=8>
                        <div class="row justify-content-between">
                           <div class="col-md-12 ">
                              {{-- {{ $newses->appends(Request::all())->links() }} --}}
                           </div>
                        </div>
                     </td>
                  </tr>
               </tfoot>
            </table>
            
         </div>
      </div>
   </div>
</div>
@endsection