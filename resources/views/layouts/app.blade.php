<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Sidebar</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/zmdi/2.2.0/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <div id="viewport">
    <!-- Sidebar -->
    <div id="sidebar">
      <header>
        <img src="https://blog-static.mamikos.com/wp-content/uploads/2022/06/Foto-Profil-WA-Keren_2.jpg" alt="Logo" class="img-fluid mx-auto d-block my-3" style="max-width: 150px;">
        <h1>Admin</h1>
      </header>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a href="{{route('layouts')}}" class="nav-link">
            <i class="zmdi zmdi-view-dashboard"></i> Dashboard
          </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('tambah.murid') }}" class="nav-link">
              <i class="zmdi zmdi-link"></i> Tambah Murid
            </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="zmdi zmdi-widgets"></i> Overview
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="zmdi zmdi-calendar"></i> Events
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="zmdi zmdi-info-outline"></i> About
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="zmdi zmdi-settings"></i> Services
          </a>
        </li>
        <li class="nav-item">
          <a href="/logout" class="nav-link">
            <i class="zmdi zmdi-comment-more"></i> Logout
          </a>
        </li>
      </ul>
    </div>
    <!-- Content -->
    <div id="content">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <ul class="nav navbar-nav navbar-right">
            <li class="nav-item">
              <a href="#" class="nav-link"><i class="zmdi zmdi-notifications text-danger"></i></a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link"> Welcome Admin</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="container mt-5">
        @yield('content')
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-pZkwSQMH1/JnFQltu1Xmv6LOElryuF6VBmXzQieWJ4kCBOWtpU1N9K1po9SOOFM7" crossorigin="anonymous"></script>
</body>
</html>
