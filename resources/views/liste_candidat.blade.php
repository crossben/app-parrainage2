<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste candidat</title>

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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/electeur/create">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('liste-candidat')}}">Candidats</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('programmes.index')}}">Programmes</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="row">
            @if (count($candidats) > 0)
                @foreach ($candidats as $candidat)
                    <div class="col-md-6 my-2 py-2 border">
                        <h4>{{ $candidat->nom }} {{ $candidat->prenom }}</h4>
                        <div class="col-md-6"><img class="img img-fluid" src="{{ $candidat->photo }}" alt="{{ $candidat->nom }}"></div>
                        <p><strong>Parti politique:</strong> {{ $candidat->parti }}</p>
                        <p><strong>Biographie:</strong> {{ $candidat->biographie }}</p>
                        <p><strong>Programme:</strong> {{$candidat->programme}} </p>
                        <p><strong>Secteur:</strong> {{$candidat->secteur}} </p>
                        <a class="btn btn-secondary" href="{{ route('candidat.confirm', ['candidat' => $candidat->id]) }}">like</a>
                        <a class="btn btn-secondary" href="{{ route('candidat.unconfirm', ['candidat' => $candidat->id]) }}">dislike</a>
                    </div>
                @endforeach
            @else
                <div class="col-md-12 text-center">
                    <p>Aucun candidat n'est disponible pour le moment.</p>
                </div>
            @endif
        </div>
    </div>   
    <footer class="mt-5">
        <div class="container text-center">
            <p>&copy; 2024 W3tech Vision. Tous droits réservés.</p>
        </div>
    </footer>
</body>
</html>