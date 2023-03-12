<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{

    public function store(Movie $movie, Request $request)
    {

//        dd($request->comment);
        $user = auth()->user();;
//        $movie->comments()->create($request->all());

        $comment = new Comment;
        $comment->movie_id = $movie->id;
        $comment->comment = $request->get('comment');
        $comment->user_id = $user->id;
        $comment->parent_id = NULL;



        $comment->save();


        //dd($comment->movie->user);

//        return view('movie', compact('comments'));

        return redirect()->back()->with('success', 'You added a comment!');


    }

    public function editcomment(Comment $comment)
    {
        $movie = $comment->movie;

        return view('commentedit',compact('comment', 'movie' ));
    }

    public function updatecomment(Request $request, Comment $comment)
    {
        $comment->update($request->all());
        $movie=$comment->movie;

        return redirect()->action([MovieController::class, 'getMovie'], ['movie' => $movie]);
       // return view('movie',compact('comment', 'movie' ));
   //   return RedirectToAction("getMovie", "MovieController");

    }



    public function deletecomment(Comment $comment)
    {
        $comment->delete();

        return back();
    }

    public function editReply(Comment $comment)
    {

        $movie = $comment->movie;


        return view('replies.edit', compact('comment', 'movie'));
    }

    public function updateReply(Request $request, Comment $comment)
    {

        $comment->update($request->all());


        $test = $request->all()['new_name'];

        //dd($test);



        return redirect()->route('comment.response', $comment->parent);
    }

    public function deleteReply(Comment $reply)
    {
        $reply->delete();

        return back();
    }

}
