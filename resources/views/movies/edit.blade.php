<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit</title>
</head>
<body>
    <div class="container my-3">
        <h1>Inserisci film</h1>
        <h4><a href="{{route("home")}}">Torna alla home</a></h4>
        <div class="row g-4 py-4">
            <div class="col">
                <form action="{{ route('movies.update', $movie->id) }}" method="post">
                    @csrf
                    

                    @method("PUT")
                
                    <label for="name">title</label>
                    <input class="form-control" type="text" name="title" value="{{$movie->title}}">
    
                    <label for="name">description</label>
                    <textarea class="form-control" name="description" cols="30" rows="7">{{$movie->description}}</textarea>
    
                    <label for="name">price</label>
                    <input class="form-control" type="text" name="price" value="{{$movie->price}}">
    
                    <label for="name">image</label>
                    <input class="form-control" type="text" name="image" value="{{$movie->thumb}}">
    
                    <label for="name">series</label>
                    <input class="form-control" type="text" name="series" value="{{$movie->series}}">
    
                    <label for="name">type</label>
                    <input class="form-control" type="text" name="type" value="{{$movie->type}}">
    
                    <label for="name">artists</label>
                    <input class="form-control" type="text" name="artists" value="{{$movie->artists}}">
    
                    <label for="name">writers</label>
                    <input class="form-control" type="text" name="writers"value="{{$movie->writers}}">
    
                    <input class="form-control mt-4 btn btn-primary" type="submit" value="Invia">
                </form>
            </div>
        </div>
    
    </div>
</body>
</html>