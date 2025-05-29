<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ScholarshipConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $firstname;
    public $lastname;

    public function __construct($firstname, $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function build()
    {
        return $this->subject('Scholarship Application Confirmation')
                    ->view('emails.scholarship-confirmation');
    }
}
