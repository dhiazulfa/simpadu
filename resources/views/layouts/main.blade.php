<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <!-- font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Viga">
    <link rel="stylesheet" href="/css/style.css">
    <title>SIMPADU | {{ $title }}</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
    <a class="navbar-brand-main text-decoration-none" href="/">SIMPADU</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse ml-auto" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link navlink-main {{ ($active === "home") ? 'active' : '' }} " href="/">Home</a>
              </li>
              <!--<li class="nav-item">
                <a class="nav-link {{ ($active === "about") ? 'active' : '' }} " href="/about">About</a>
              </li> -->
              
              <li class="nav-item">
                <a class="nav-link navlink-main {{ ($active === "posts") ? 'active' : '' }}" href="/posts">Blog</a>
              </li>

              <li class="nav-item">
                <a class="nav-link navlink-main {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Categories</a>
              </li>
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="color: white;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Welcome back, {{auth()->user()->name}}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> 
                Dashboard</a>
                <div class="dropdown-divider"></div>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> 
                        Logout
                    </button>
                </form>
                </div>
            </li>
            @else
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link navlink-main {{ ($title === "Login") ? 'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i>
                        Login</a>
                    </li>
                </ul>
            @endauth
            </ul>

        </div>
    </div>
    </nav>
    <!-- end of navbar -->
      @yield('jumbotron')
    
    <div class="container">
     @yield('container')
    </div>

    <footer class="w-100 py-4 flex-shrink-0">
      <div class="container py-4">
          <div class="row gy-4 gx-5 justify-content-center">
              <div class="col-lg-4 col-md-6">
                  <h5 class="h1 text-white">LPK OmahTech</h5>
                  <p class="small text-muted">LKP Omahtech sudah berdiri sejak tahun 2019, selama dua tahun lebih pelatihan 
                    programmer di LKP Omahtech sudah diikuti lebih dari 9.000 siswa siswi se-Indonesia dengan 
                    pelatihan secara daring via zoom.</p>
                  <p class="small text-muted mb-0">&copy; Copyrights. All rights reserved. <a class="text-primary" href="#">omah-ti.com</a></p>
              </div>
              <div class="col-lg-2 col-md-6">
                  <h5 class="text-white mb-3">Quick links</h5>
                  <ul class="list-unstyled text-muted">
                      <li><a href="/">Home</a></li>
                      <li><a href="/posts">Artikel</a></li>
                      <li><a href="/learning-materials">Bahan Ajar</a></li>
                      <li><a href="/categories">Kategori</a></li>
                  </ul>
              </div>
              <div class="col-lg-4 col-md-6">
                  <h5 class="text-white mb-3">Registrasi</h5>
                  <p class="small text-muted">Ingin menjadi bagian dari LPK OmahTech? Registrasi sekarang!</p>
                  <a href="/pendaftaran" class="btn btn-success tombol">Gabung Sekarang</a>
              </div>
          </div>
      </div>
  </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>