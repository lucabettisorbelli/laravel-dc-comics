<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dettaglio film</title>
</head>
<body>
    <h1>Dettaglio film</h1>
    <h4><a href="{{route("home")}}">Torna alla home</a></h4>
    <h2><strong>Titolo: </strong>{{$movie->title}}</h2>
    <h3><strong>Descrizione: </strong>{{$movie->description}}</h3>
    <h3><strong>Prezzo: </strong>{{$movie->price}}</h3>
    <h3><strong>Series: </strong>{{$movie->series}}</h3>
    <h3><strong>Tipo: </strong>{{$movie->type}}</h3>
    <h3><strong>Artista: </strong>{{$movie->artists}}</h3>
    <h3><strong>Scrittori: </strong>{{$movie->writers}}</h3>
    <img src="{{$movie->thumb}}" alt="">
</body>
</html>