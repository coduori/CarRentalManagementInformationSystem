<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($to,$mess,$sub)
    {
        $this->to=$to;
        $this->mess=$mess;
        $this->sub=$sub;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from('iconcept24@gmail.com')->subject($sub)
                    ->view('emails.ordinaryMail')->with('details',$this->details);
    }
}
