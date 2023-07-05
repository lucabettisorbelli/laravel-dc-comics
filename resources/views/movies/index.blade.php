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
    
    <div class="container">
        <div class="card text-center">
            <ul>
                @foreach ($movies as $movie)
                    <li><a href="{{ route("movies.show", $movie->id) }}">{{$movie->title}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>