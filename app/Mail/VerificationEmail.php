<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\URL;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Lang;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Support\Facades\Config;

class VerificationEmail extends Mailable implements ShouldQueue
{
    use Queueable;

    public static $createUrlCallBack;

    /**
     * Create a new message instance.
     */
    public function __construct(
        public User $user
    ) {
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {

        return new Envelope(
            from: new Address(env('MAIL_FROM_ADDRESS'), env('APP_NAME')),
            replyTo: [
                new Address(env('MAIL_FROM_ADDRESS'), env('APP_NAME'))
            ],
            // subject: Lang::get('Verify Email Address', [], 'pt_BR', 'pt_BR'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.verifyEmail',
            with: ['url' => $this->verificationUrl()]
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

    protected function verificationUrl()
    {
        return Url::temporarySignedRoute(
            'verification.verify',
            Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
            [
                'id' => env('APP_KEY'),
                'hash' => sha1(env('MAIL_FROM_ADDRESS')),
            ]
        );
    }
}
