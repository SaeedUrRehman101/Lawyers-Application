<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailMessage;
    public $subject;
    public $mailService;
    public $mailSlots;
    public $mailName;
    public $maillawName;
    /**
     * Create a new message instance.
     */
    public function __construct($subject,$mailName,$mailSlots,$mailMessage,$mailService,$maillawName)
    {
        $this->mailMessage = $mailMessage;
        $this->subject = $subject;
        $this->mailName = $mailName;
        $this->mailSlots = $mailSlots;
        $this->mailService = $mailService;
        $this->maillawName = $maillawName;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.sendEmail',
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
}
