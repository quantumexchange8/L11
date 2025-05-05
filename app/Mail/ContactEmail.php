<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactCreated;
    public $logoCid;

    public function __construct($contactCreated)
    {
        $this->contactCreated = $contactCreated;
    }

    public function envelop(): Envelope
    {
        return new Envelope(
            subject: 'New Contact'
        );
    }

    public function build()
    {
        $logoPath = public_path('assets/img/SUNRISE4.png');
        $email = $this->view('email.contact')
            ->subject('New Contact')
            ->with([
                'contactCreated' => $this->contactCreated,
            ]);

        $logoPath = public_path('assets/img/SUNRISE4.png');

        // Embed image and store CID for the view
        $email->withSwiftMessage(function ($message) use (&$email, $logoPath) {
            $cid = $message->embed($logoPath);
            $email->with(['logoCid' => $cid]);
        });

        return $email;
    }
}
