<?php
namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        //Kodingan ini berfungsi untuk me reply masalah yang dialami user ke email yang user input
        return new Envelope(
            subject: 'Contact Message',
            replyTo: [
            new Address($this->data['email'], $this->data['name']),
        ],

        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact',
            with: ['data' => $this->data],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}