<?php

namespace App\Mail;

use App\Contato;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailContatoAdm extends Mailable
{
    use Queueable, SerializesModels;

    public $contato;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contato $contato)
    {
        $this->contato = $contato;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Exata Automação - ' . $this->contato->subject)
            ->markdown('email.contatoadmin');
    }
}
