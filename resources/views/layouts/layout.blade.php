<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">
   
   <title>@yield('title')</title>
   
   <style>
      .judul-berita {
         font-size: 20px;
         font-weight: bold;
      }

      .kategori-berita {
         margin-top: 30px;
      }

      .kategori-berita span {
         font-size: 13px;
      }

      .kategori-berita span.kategori-title {
         border: solid rgb(136, 117, 117) 1px;
         padding: 2px 6px;
         font-weight: bold;
      }
   </style>

   @stack('css')
</head>
<body class="bg-light">

   <!--Include Navbar-->
   @include('layouts.navbar')

   {{-- Untuk menampung data body --}}
   <div class="container mt-2">
      @yield('content')

   </div>

   <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
   <script src="{{ asset('vendors/bootstrap/js/bootstrap.min.js') }}"></script>
   
   @stack('js')
</body>
</html>