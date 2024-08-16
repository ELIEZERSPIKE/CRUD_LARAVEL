<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OtpCode</title>
</head>
<body>
    <form action="{{route('otpCpde.process')}}" method="POST">
        @csrf
        <h1>Code de confirmation</h1>
        @if($errors->any()) 
        <ul class="alert alert-danger">
            {{!!implode('', $errors->all('<li>:message</li>')) !!}}
        </ul>
        @endif
        @if($message = Session::get('error')) 
        <div>{{$message}} </div><br/>
        
        @endif
        <p>Un code de confirmation a été envoyé à votre addresse.  Saissez le champ suivant</p>
        <label for="code">Code de confirmation</label>
        <input type="hidden" name="email" id="email" value="{{Session()->get('email')}}">
        <input type="text" name="code" id="code" autocomplete="off" placeholder="Saisir ici le code de confirmation"><br /><br />
        
        <button type="submit">Soumettre</button>
    </form>
    
</body>
</html>