<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Queue\SerializesModels;

class ContactAutoReply extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
        subject: 'Thanks for contacting us!',
        replyTo: [
            new Address($this->data['email'], $this->data['name']),
        ],
    );

    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.auto_reply',
            with: ['data' => $this->data],
        );
    }

   public function attachments(): array
    {
        return [
            Attachment::fromPath(public_path('images/tim.jpg'))
                ->as('tim.jpg')
                ->withMime('images/tim.jpeg'),
        ];
    }
}