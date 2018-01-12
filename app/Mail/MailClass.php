<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailClass extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $email;
    protected $phone;

    /**
     * Create a new message instance.
     *
     * @param $name
     * @param $email
     * @param $phone
     */
    public function __construct($name, $email, $phone)
    {
        $this-> name = $name;
        $this-> email = $email;
        $this-> phone = $phone;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('pismo')
            ->with([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone
            ])->subject('РАБОТА!');
    }
}
