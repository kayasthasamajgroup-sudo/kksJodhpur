<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MailSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

   
    public function __construct($data){
$this->data = $data;
    }
    
   
    public function build()
    {
        return $this->subject('Someone Interest in You')
                    ->replyTo($this->data['email']) // user email for reply
                    ->view('all-mail');   // Blade template
    }
}
