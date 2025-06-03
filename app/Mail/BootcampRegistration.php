<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BootcampRegistration extends Mailable
{
    use Queueable, SerializesModels;

    public $firstname;
    public $lastname;
    public $scholarshipLink;

    public function __construct($firstname, $lastname, $scholarshipLink)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->scholarshipLink = $scholarshipLink;
    }

    public function build()
    {
        return $this->subject('Thank You for Registering for AYB AI, Data Science and Machine Learning Training!')
                    ->view('emails.bootcamp-registration');
    }
}