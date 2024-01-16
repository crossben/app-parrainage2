<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Liens CDN de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Tw12HMIJt1v2xOMmoqVVlrvfAgGz0TbsTQyr4/9bWEeVMc1va+YL8In1l3ZmOSIw" crossorigin="anonymous">
</head>
<body>

    <!-- En-tête avec la barre de navigation -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/">Mon Site</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/candidats">Candidats</a>
                        </li>
                        <!-- Ajoutez d'autres liens de navigation selon vos besoins -->
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Contenu spécifique à chaque page -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Pied de page -->
    <footer class="mt-5">
        <div class="container text-center">
            <p>&copy; 2024 Mon Site. Tous droits réservés.</p>
        </div>
    </footer>

    <!-- Liens CDN de Bootstrap (scripts JavaScript) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-h56eYgQyIiSor5Tg2p09c9z9WBHjOjwQ1MeOz9zqfQK3QhiW4jwGU4gI59Fz7FGA" crossorigin="anonymous"></script>
</body>
</html>
