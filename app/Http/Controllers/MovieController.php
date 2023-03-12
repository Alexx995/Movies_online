<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function allMovies()
    {
        $movies=Movie::all();
        return view('dashboard', compact('movies'));
    }

    public function getMovie(Movie $movie)
    {
       // $comments = $movie->comments;
      //  $comments = $movie->comments ()->with('replies')->get();

        $comments = Comment::whereNull('parent_id')->get()->where('movie_id', $movie->id);



        return view('movie', compact('movie', 'comments'));
    }

}
