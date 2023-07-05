<?php

namespace App\Http\Controllers;

use App\Models\Movie;

use Illuminate\Http\Request;

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newMovie = new Movie;
        $newMovie->title = $data['title'];
        $newMovie->description = $data['description'];
        $newMovie->price = $data['price'];
        $newMovie->series = $data['series'];
        $newMovie->type = $data['type'];
        $newMovie->artists = $data['artists'];
        $newMovie->writers = $data['writers'];
        $newMovie->thumb = $data['image'];
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
    public function update(Request $request, Movie $movie)
    {

        $data = $request->all();

        $movie->title = $data['title'];
        $movie->description = $data['description'];
        $movie->price = $data['price'];
        $movie->series = $data['series'];
        $movie->type = $data['type'];
        $movie->artists = $data['artists'];
        $movie->writers = $data['writers'];
        $movie->thumb = $data['image'];
        $movie->update();

        return redirect()->route('movies.show', $movie->id);
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
