<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Mail extends Mailable
{
    use Queueable, SerializesModels;
    protected $name;
    protected $email;
    protected $comment;

    /**
     * Mail constructor.
     * @param $name
     * @param $email
     * @param $comment
     */
    public function __construct($name, $email, $comment)
    {
        $this->name = $name;
        $this->email = $email;
        $this->comment = $comment;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('andrew@wsa.kz', 'Alles')->view('mails.mail-message-template', [
            'name' => $this->name,
            'email' => $this->email,
            'comment' => $this->comment
        ]);
    }
}
