<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ThankYouMail extends Mailable
//  implements ShouldQueue
{
    use Queueable, SerializesModels;
    public $msg;
    /**
     * Create a new message instance.
     */
    public function __construct($msg)
    {
        $this->msg = $msg;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Thank You Mail',
            // Note: Laravel automatically uses MAIL_FROM_ADDRESS from .env, 
            // but you can override it here if needed:
            // from: new Address('admin@example.com', 'Store Admin'),
        );
    }

    /**
     * Get the message content definition. (View and Data).
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.thankYou',
            // If you want the variable in blade to be $orders instead of $order:
            with: [
                'name' => $this->msg->name,
                'messages' => $this->msg->message,
                'subject' => $this->msg->subject
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
