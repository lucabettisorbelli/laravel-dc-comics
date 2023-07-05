<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <title>dettaglio film</title>
</head>
<style>
    .boxImage{
        width: 250px;
        height: 250px;
    }

    .boxImage img {
        width: 100%;
        height: 100%;
    }
</style>
<body>
    <div class="title text-center">
        <h1>Dettaglio film</h1>
        <h4><a class="btn btn-primary" href="{{route("home")}}">Torna alla home</a></h4>
        <h4><a class="btn btn-primary" href="{{ route("movies.edit", $movie) }}">Modifica questo film</a></h4>
        <form action="{{ route('movies.destroy', $movie) }}" method="post">
            @csrf
            @method('DELETE')
            <input class="btn btn-danger" type="submit" value="Cancella il film">
        </form>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <h2><strong>Titolo: </strong>{{$movie->title}}</h2>
                    <h3><strong>Descrizione: </strong>{{$movie->description}}</h3>
                    <h3><strong>Prezzo: </strong>{{$movie->price}}</h3>
                    <h3><strong>Series: </strong>{{$movie->series}}</h3>
                    <h3><strong>Tipo: </strong>{{$movie->type}}</h3>
                    <h3><strong>Artista: </strong>{{$movie->artists}}</h3>
                    <h3><strong>Scrittori: </strong>{{$movie->writers}}</h3>
                    <div class="boxImage">
                        <img src="{{$movie->thumb}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>