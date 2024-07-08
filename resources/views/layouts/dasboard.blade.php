<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Add any additional stylesheets or scripts here -->
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top bg-light navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
    </button>
    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mb-3">
                <a class="navbar-brand" href="#">
                    <img id="MDB-logo" src="https://mdbcdn.b-cdn.net/wp-content/uploads/2018/06/logo-mdb-jquery-small.png" alt="MDB Logo" draggable="false" height="30">
                </a>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav align-items-center mx-auto">
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="{{ route('guru.tambah.nilai', ['kelasId' => $kelas->id, 'muridId' => $murid->first()->id]) }}">
                                <i class="fas fa-plus-circle pe-2"></i>Tambah Nilai
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="/logout">
                                <i class="fas fa-bell pe-2"></i>Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<div id="content">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="zmdi zmdi-notifications text-danger"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"> Welcome GURU</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        @yield('content')
    </div>
</div>
<!-- Add any additional scripts here -->
</body>
</html>
