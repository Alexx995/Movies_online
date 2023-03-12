<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\User;
use App\Models\Watchlist;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class WatchlistController extends Controller
{
    public function store(Movie $movie): RedirectResponse
    {

        /** @var User $user */
        $user = auth()->user();


        /** @var Watchlist $watchlist */
        $watchlist = $user->watchlist()->firstOrCreate();

        $watchlist->movies()->syncWithoutDetaching($movie->id);

        return redirect()->back()->with('success', 'You added this movie to your watchlist!');
    }

    public function watchlist(): View
    {
        /** @var User $user */
        $user = auth()->user();

        $movies = $user->watchlist->movies;

        return view('list', compact('movies'));
    }

    public function removeMovie(Movie $movie)
    {
        $user = auth()->user();

        $watchlist = $user->watchlist;

//        dd($watchlist);

        $movie->watchlist()->detach($watchlist);

       // $watchlist->movies()->detach($movie);


        return redirect()->back()->with('success', 'You deleted this movie from your watchlist!');
    }

}
