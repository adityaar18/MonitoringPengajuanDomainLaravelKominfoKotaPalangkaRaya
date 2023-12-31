<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class formMail extends Mailable
{
    use Queueable, SerializesModels;
    public $isi_email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($isi_email)
    {
        $this->isi_email=$isi_email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('magangkominfo2022@gmail.com')
        ->subject('Notifikasi Pertanyaan Dari Pengaju')
        ->view('emails.formemail');
        
    }
}
