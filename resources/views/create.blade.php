{{-- <h1>Creer un utilisateur</h1>
@if ($errors->any())
<div class="alert alert-danger">
<ul>
    @foreach ($errors->all() as $error) 
    <li>{{ $error}} </li>

    @endforeach
</ul>
</div>


@endif


<form action="{{route('users.MakeUp')}}" method="POST">
    @csrf
<label for="name">Entrer le nom de l'utilisateur</label>
<input type="text" name="name" id="name">
<br/>
<label for="email">Enter l'email </label>
<input type="email" name="email" id="email">
<br/>

<input type="submit" value="creer un utilisateur">

</form> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">


        <h1>Creer un utilisateur</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error) 
            <li>{{ $error}} </li>
        
            @endforeach
        </ul>
        </div>
        
        
        @endif


        <form action="{{ route('users.MakeUp') }}" method="POST">
            @csrf
            <div class="mb-3 row">
                <label for="text" class="col-sm-2 col-form-label">Nom d'utilisateur</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputEmail"
                        placeholder="Saisir Nom  ici ">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" id="email"
                        placeholder=" Saisir Nom D'utilisateur Email">
                </div>
            </div> -
            <div class="row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Soumettre</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
