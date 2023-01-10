<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class Prueba extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Ticket de Soporte";
    /**
     * Create a new message instance.
     *
     * @return void
     */
    
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.SendTicketSupport');
    }
}
