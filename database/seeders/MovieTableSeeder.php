<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = config("movies");

        foreach ($movies as $movie) {
            $newMovie = new Movie();
            $newMovie->title = $movie["title"];
            $newMovie->description = $movie["description"];
            $newMovie->thumb = $movie["thumb"];
            $newMovie->price = str_replace('$', '', $movie["price"]);
            $newMovie->series = $movie["series"];
            $newMovie->sale_date = $movie["sale_date"];
            $newMovie->type = $movie["type"];
            $newMovie->artists = implode(", ", $movie["artists"]);
            $newMovie->writers = implode(", ", $movie["writers"]);
            $newMovie->save();
        }
    }
}
