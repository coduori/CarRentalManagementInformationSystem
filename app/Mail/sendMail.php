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
    public $subject;
    public $message;

    public function __construct($request)
    {
        $this->subject=$request->subject;
        $this->message=$request->message;
        
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env("MAIL_USERNAME"))->subject($this->subject)
                    ->view('emails.ordinaryMail')->with('details',$this->message);
    }
}
