<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste programmes</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/">W3tech Vision</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/electeur/create">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('liste-candidat') }}">Candidats</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('programmes.index')}}">Programmes</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container mt-5">
        <h1 class="mb-4">Liste des Programmes</h1>
    
        @if (count($programmes) > 0)
            <ul class="list-group">
                @foreach ($programmes as $programme)
                    <li class="list-group-item">
                        <h5 class="mb-1">{{ $programme->nom }}</h5>
                        <p class="mb-1">{{ $programme->secteur }}</p>
                        @if ($programme->candidat)
                            <small>Candidat : {{ $programme->candidat->nom }} {{ $programme->candidat->prenom }}</small>
                        @else
                            <small>Pas de candidat associé</small>
                        @endif
                    </li>
                @endforeach
            </ul>
        @else
            <p class="mt-3">Aucun programme disponible pour le moment.</p>
        @endif
    </div>
    
    <footer class="mt-5">
        <div class="container text-center">
            <p>&copy; 2024 W3tech Vision. Tous droits réservés.</p>
        </div>
    </footer>
</body>

</html>
