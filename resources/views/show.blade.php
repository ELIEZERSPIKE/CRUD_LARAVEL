{{-- <h1>Modification de utilisateurs </h1>

<h1>{{$user->name}} </h1> 
<p>{{$user->email}} </p> 
<a href="{{route('users.edit', $user->id)}}" style="color: burlywood">Modifier</a>

<form action="{{route('users.destroy', $user->id)}}" method="POST">
    @csrf
    @method('DELETE')
<input type="submit" name="" id="" value="supprimer">

</form> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier ou Supprimer un utilisateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Modifier ou Supprimer un utilisateur</h2>
        <br /><br />

        <div class="row mb-3">
            <div class="col-sm-8">
                <h1>{{ $user->name }}</h1>
                <p>{{ $user->email }}</p>
            </div>
            <div class="col-sm-4 text-end">
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Modifier</a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 text-end">
                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
