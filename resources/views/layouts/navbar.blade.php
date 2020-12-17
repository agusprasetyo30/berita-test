<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <div class="container">

      <a class="navbar-brand" href="/">BERITA HARI INI</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
         <!--Jika keadaan sudah login-->
         @if (\Auth::user())
            <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                  <a class="nav-link {{ Request::is('admin/berita*') ? ' active' : '' }}" href="{{ route('admin.berita.index') }}">Berita</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link {{ Request::is('admin/kategori*') ? ' active' : '' }}" href="{{ route('admin.kategori.index') }}">Kategori</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link {{ Request::is('admin/pengguna*') ? ' active' : '' }}" href="{{ route('admin.pengguna.index') }}">Pengguna</span></a>
               </li>
               <li class="nav-item dropdown ">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     {{ \Auth::user()->name ?? 'Nothing' }}
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                     <form action="{{ route('logout') }}" method="post" id="logout">
                        @csrf
                        <a class="dropdown-item" href="#" onclick="document.getElementById('logout').submit();">Logout</a>
                     </form>
                  </div>
               </li>
            </ul>

         <!--Jika keadaan sudah belum/tidak login-->
         @else
            <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                  <a class="nav-link active" href="{{ route('login') }}">Login</span></a>
               </li>
            </ul>
         @endif
      </div>
   </div>
</nav>