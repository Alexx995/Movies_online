<?php

namespace App\Http\Controllers;
use App\Models\Comment;


use App\Models\Movie;
use Illuminate\Http\Request;

class RescomController extends Controller
{
    public function responsecomment(Comment $comment, Movie $movie)
    {
        $movie = $comment->movie;

//        foreach ($comment->replies  as $reply) {
//            echo $reply->comment . "\n";
//        }
//
//        dd('stop');
//        foreach ($movie->testArray as $key => $item) {
//            if ($key == 2) {
//                dd($item);
//            }
////            dd($item, $key, $movie->testArray);
//        }
//       // dd($comment);
////        $comments = $movie->comments ()->with('replies')->get();
//

        return view('rescom', compact('comment', 'movie'));
    }

    public function storeresponse(Comment $comment, Request $request)
    {
        $user = auth()->user();

//        $movie->comments()->create($request->all());

        $response = new Comment;
        $response->movie_id = $comment->movie_id;
        $response->comment = $request->get('response');
        $response->user_id = $user->id;
        $response->parent_id = $comment->id;



        $response->save();

        return redirect()->back();
    }


}
