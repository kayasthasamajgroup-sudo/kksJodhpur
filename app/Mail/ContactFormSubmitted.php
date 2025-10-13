<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmitted extends Mailable


{
    use Queueable, SerializesModels;

    // public $msg;
    // public $sub;

    public $data;

    // public function __construct($msg,$subject)
    // {
    //     $this->msg = $msg;
    //     $this->sub =$subject;
    // }

    public function __construct($data){
$this->data = $data;
    }
    
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: $this->sub,
    //     );
    // }

    public function content(): Content
    {
        return new Content(
            view: 'contact-form-submission',
        );
    }
    public function build()
    {
        return $this->subject($this->data['subject'] ?? 'New Contact Form Submission')
                    ->replyTo($this->data['email']) // user email for reply
                    ->view('contact-form-submission');   // Blade template
    }
}
