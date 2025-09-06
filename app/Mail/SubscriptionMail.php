<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SubscriptionMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct( array $request )
    {
        $this->data = $request;
        // dd($this->request);
    }

    public function build()
    {
        return $this->view('Booking::frontend.Mail.subscriptionMail')
            ->with('data', $this->data)
            ->subject('Subscription Mail');
    }

}
