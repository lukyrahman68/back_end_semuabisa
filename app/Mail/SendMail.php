<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $nama;
    public $email;
    public $pesan;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nama,$email,$pesan)
    {
        //
        $this->nama = $nama;
        $this->email = $email;
        $this->pesan = $pesan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('frontend.mail')
                    ->subject('Email Website');
    }
}
