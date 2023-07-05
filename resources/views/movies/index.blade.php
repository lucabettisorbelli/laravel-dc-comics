<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="..resources/scss/app.scss">
    <title>Movies</title>
</head>
<body>
    <h1 class="text-center">Movies-Dc-Comics</h1>
    <div class="text-center">
        <a class="btn btn-primary" href="{{ route("movies.create") }}">Aggiungi un nuovo Film</a>
    </div>
    
    <div class="container mt-1">
        <div class="card text-center">
            <ul class="list-group">
                @foreach ($movies as $movie)
                    <li class="list-group-item"><a href="{{ route("movies.show", $movie->id) }}">{{$movie->title}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>