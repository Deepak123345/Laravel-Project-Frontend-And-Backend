<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DK Furniture</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/Navbar.css') }}">
  

</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

  <nav class="navbar navbar-expand-lg navbar-light bg-brown">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="/">
      <img src="images/gem.png" class="logo-image me-2" style="height: 60px;">
      <span class="brand-name">DK Furniture</span>
    </a>

    {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> --}}

    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/Gallery">Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Shop</a></li>
        <li class="nav-item"><a class="nav-link" href="/#Contact-Dk-furniture">Contact</a></li>
      </ul>
      
      <div class="d-flex align-items-center gap-3 flex-wrap">
        <div class="search-bar-container d-flex">
          <input type="text" placeholder="Search..." class="form-control me-2 search-input">
          <button class="btn btn-outline-secondary search-button">🔍</button> 
        </div>
        
        <div class="d-flex gap-2">
          <button class="Login_button">Login</button>
          <button class="Login_button">Register</button>
        </div>
      </div>
    </div>
  </div>
</nav>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script> --}}