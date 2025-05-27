<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Movie - @yield('title', 'Homepage')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-success" data-bs-theme="dark">
      <div class="container">
        <a class="navbar-brand" href="/">MOVIE DB</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/movie/create">Input Movie</a>  
            </li>
            </li>
            <li class="nav-item d-flex align-items-center text-white me-3">
              <span class="nav-link text-white mb-0">
                Hello, {{ auth()->check() ? auth()->user()->name : 'Guest' }}
            </span>
            
          </li>
          
          </ul>

          {{-- Search Bar --}}
          <form class="d-flex me-2" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form>

          {{-- Auth Buttons --}}
          @auth
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
              @csrf
              <button type="submit" class="btn btn-outline-light">Logout</button>
            </form>
          
            </div>
          @else
            <a href="{{ route('login') }}" class="btn btn-light">Login</a>
          @endauth

        </div>
      </div>
    </nav>

    <div class="container my-2">
       @yield('content')
    </div>

    <div class="bg-success py-2 text-white text-center">
        Copyright &copy; 2025 develope by ipan
    </div>
    @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
