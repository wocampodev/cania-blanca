<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InfoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $content;
    public $subject;

    public function __construct($content, $subject)
    {
        $this->content = $content;
        $this->subject = $subject;
    }

    /**
     * Build the content.
     *
     * @return $this
     */
    public function build()
    {
        $subject = $this->subject;
        $content = $this->content;
        return $this->view('email.welcome.welcome')
            ->subject($subject)
            ->with([
                'array_content' => $content,
            ]);
    }
}
