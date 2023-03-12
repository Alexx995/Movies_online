<?php

namespace App\Http\Controllers;

use App\Mail\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function sendMail()
    {
        $user = 'Dzoni';
        $movie = 'Maratonci';
        Mail::to('fake@gmail.com')->send(new Comment($user, $movie));
        return view('dashboard');
    }

}
