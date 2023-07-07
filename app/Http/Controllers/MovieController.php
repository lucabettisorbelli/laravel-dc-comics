<?php

namespace App\Http\Controllers;

use App\Models\Movie;

use Illuminate\Http\Request;

use App\Http\Requests\UpdateMovieRequest;

use App\Http\Requests\StoreMovieRequest;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        return view("movies.index", compact("movies"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("movies.create");
    }


    // private function validateMovie($data)
    // {
    //     $validator = Validator::make($data, [
    //         "title" => "required|min:5|max:50",
    //         "description" => "required|min:5|max:65535",
    //         "image" => "required",
    //         "price" => "max:255",
    //         "series" => "min:5|max:255",
    //         "type" => "required|max:20",
    //         "artists" => "required|max:20",
    //         "writers" => "required|max:20",
    //     ], [
    //         "title.required" => "Il titolo è obbligatorio",
    //         "title.min" => "Il titolo deve essere almeno di :min caratteri",
    //         "description.required" => "la descrizione è obbligatoria"
    //     ])->validate();

    //     return $validator;
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMovieRequest $request)
    {

        // $request->validate([
        //     "title" => "required|min:5|max:50",
        //     "description" => "required|min:5|max:50",
        //     "type" => "required|min:5|max:50",
        //     "price" => 'required|numeric|between:0,99.99'
        // ]);

        $data = $request->validated();

        $newMovie = new Movie;
        $newMovie->fill($data);

        $newMovie->save();


        return redirect()->route('movies.show', $newMovie->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::find($id);
        return view("movies.show", compact("movie"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view("movies.edit", compact("movie"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMovieRequest $request, Movie $movie)
    {

        $data = $request->validated();

        $newMovie = new Movie;
        $newMovie->fill($data);

        $newMovie->save();

        return to_route('movies.show', $movie->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()->route('movies.index');
    }
}
