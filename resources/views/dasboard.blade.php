<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Tableau de Bord</h1>
        
        <h2 class="mb-3">Liste des utilisateurs</h2>
        <a href="{{ route('users.create') }}" class="btn btn-success mb-4">Créer un utilisateur</a>
        
        <div class="row">
            @foreach ($users as $user)
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('show', $user->id) }}">{{ $user->name }}</a>
                            </h5>
                            <p class="card-text">{{ $user->email }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-4">
            <a href="{{ route('user.logout') }}" class="btn btn-danger">Se déconnecter</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>