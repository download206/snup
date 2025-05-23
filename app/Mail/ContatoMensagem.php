<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContatoMensagem extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Os dados do formulário de contato
     *
     * @var array
     */
    public $data;

    /**
     * Create a new message instance.
     *
     * @param array $data
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nova mensagem de contato - ' . $this->data['nome'],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contato',
            with: [
                'data' => $this->data,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }

    /**
     * Método alternativo (mais simples) para versões mais antigas do Laravel
     * Caso o método acima não funcione, descomente este:
     */
    /*
    public function build()
    {
        return $this->subject('Nova mensagem de contato - ' . $this->data['nome'])
                    ->view('emails.contato')
                    ->with(['data' => $this->data]);
    }
    */
}