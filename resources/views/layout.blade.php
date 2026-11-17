<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Projet Bootstrap</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <!-- Bootstrap JS -->
    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
    <!-- Additional CSS -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>

    <!-- Header / Bannière -->
    <div class="container-fluid p-0">
        <img src="{{ url('img/banner.jpg') }}" style="width: 100%;">
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LOGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Archives</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Courses</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">News</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Corps de la page (Sidenav + Contenu) -->
    <div class="container">
        <div class="row" style="margin-top: 20px;">
            
            <!-- Menu latéral gauche (4 colonnes) -->
            <div class="col-4">
                <div class="card border-primary mb-3">
                    <div class="card-header bg-primary text-white">Main menu</div>
                    <div class="card-body text-primary p-0">
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action">Link 1</a>
                            <a href="#" class="list-group-item list-group-item-action">Link 2</a>
                            <a href="#" class="list-group-item list-group-item-action">Link 3</a>
                            <a href="#" class="list-group-item list-group-item-action">Link 4</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contenu principal (8 colonnes) -->
            <div class="col-8">
                <div class="card">
                    <div class="card-header bg-primary text-white fw-bold">Title</div>
                    <div class="card-body">
                        <p class="card-text">
                            @yield('content')
                        </p>
                        <a href="#" class="btn btn-primary">Read More!</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>