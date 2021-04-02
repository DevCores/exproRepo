<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CartMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mail;
    public $contacts;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mail,$contacts)
    {
        $this->mail = $mail;
        $this->contacts = $contacts;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Заказ EXPRO ltd')->view('emails.cartmail');
    }
}
