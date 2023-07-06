<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <title>Crea film</title>
</head>
<body>
    <div class="container my-3">
        <h1>Inserisci film</h1>
        <h4><a href="{{route("home")}}">Torna alla home</a></h4>
        <div class="row g-4 py-4">
            <div class="col">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('movies.store') }}" method="post" class="needs-validation">
                    @csrf
                    
                    <label for="name">title</label>
                    <input class="form-control @error('title') is-invalid" @enderror type="text" name="title">
                    @error("title")
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
    
                    <label for="name">description</label>
                    <input class="form-control @error('title') is-invalid" @enderror type="text" name="description">
                    @error("description")
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
    
                    <label for="name">price</label>
                    <input class="form-control @error('price') is-invalid" @enderror type="text" name="price">
                    @error("price")
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
    
                    <label for="name">image</label>
                    <input class="form-control" type="text" name="image">
    
                    <label for="name">series</label>
                    <input class="form-control" type="text" name="series">
    
                    <label for="name">type</label>
                    <input class="form-control @error('type') is-invalid" @enderror type="text" name="type">
                    @error("type")
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
    
                    <label for="name">artists</label>
                    <input class="form-control" type="text" name="artists">
    
                    <label for="name">writers</label>
                    <input class="form-control" type="text" name="writers">
    
                    <input class="form-control mt-4 btn btn-primary" type="submit" value="Invia">
                </form>
            </div>
        </div>
    
    </div>
</body>
</html>