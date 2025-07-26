<?php

namespace App\Mail;

use App\Models\Attendee;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class QrCodeMail extends Mailable
{
    use Queueable, SerializesModels;

    public Attendee $attendee;

    public function __construct(Attendee $attendee)
    {
        $this->attendee = $attendee;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: __('mail.subject_qr_code'),
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'mail.qr-code-mail',
            with: [
                'attendee' => $this->attendee,
                'qrUrl' => asset('storage/' . $this->attendee->qr_code),
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
