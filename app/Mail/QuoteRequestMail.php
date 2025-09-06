<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuoteRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct(array $data) // Define $data as an array for clarity
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->view('News::frontend.cheap-flights.success')
                    ->with('data', $this->data)
                    ->subject('New Quote Request');
    }
}

