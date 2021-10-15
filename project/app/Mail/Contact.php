<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->replyTo($this->data['reply_email'], $this->data['reply_name'])
                    ->to(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
                    ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
                    ->subject($this->data['subject'])
                ->markdown('email.contact', [
                    'reply_name' => $this->data['reply_name'],
                    'reply_email' => $this->data['reply_email'],
                    'subject' => $this->data['subject'],
                    'subject' => $this->data['subject']
                ]);
    }
}
