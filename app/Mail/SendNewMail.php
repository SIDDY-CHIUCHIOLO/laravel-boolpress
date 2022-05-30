<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendNewMail extends Mailable
{
    use Queueable, SerializesModels;


    public $author;
    public $authorEmail;
    public $authorMessage;
    

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($author, $authorEmail, $authorMessage)
    {
        $this->author = $author;
        $this->authorEmail = $authorEmail;
        $this->authorMessage = $authorMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->replyTo($this->authorEmail)->view('email.body', ['author' => $this->author,
        'authorEmail' => $this->authorEmail,
        'authorMessage' => $this->authorMessage,
        ]);
    }
}
