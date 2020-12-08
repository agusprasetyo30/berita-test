<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <div class="container">

      <a class="navbar-brand" href="/">BERITA HARI INI</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
         <ul class="navbar-nav ml-auto">
            <li class="nav-item">
               <a class="nav-link" href="{{ route('admin.berita.index') }}">Berita</a>
            </li>
            <li class="nav-item">
               <a class="nav-link {{ Request::is('admin/kategori*') ? ' active' : '' }}" href="{{ route('admin.kategori.index') }}">Kategori</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{ route('admin.pengguna.index') }}">Pengguna</span></a>
            </li>
            <li class="nav-item dropdown active">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Nama Pengguna
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Logout</a>
               </div>
            </li>
         </ul>
      </div>
   </div>
</nav>