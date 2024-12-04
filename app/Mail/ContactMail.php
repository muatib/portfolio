<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $content = "Nom: " . $this->data['name'] . "\n";
        $content .= "Email: " . $this->data['email'] . "\n";
        $content .= "Sujet: " . $this->data['subject'] . "\n";
        $content .= "Message: " . $this->data['message'];

        return $this->subject('Nouveau message de contact')
                    ->html($content);
    }
}
