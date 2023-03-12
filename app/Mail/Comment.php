<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Comment extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $movie;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $movie)
    {
        $this->user = $user;
        $this->movie = $movie;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('CommentMail');
    }
}
