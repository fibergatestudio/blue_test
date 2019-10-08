<?php

namespace Webkul\Admin\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * New Shipment Mail class
 *
 * @author    Jitendra Singh <jitendra@webkul.com>
 * @copyright 2018 Webkul Software Pvt Ltd (http://www.webkul.com)
 */
class NewMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The shipment instance.
     *
     * @var Shipment
     */
    public $email;
    public $page_from;
    public $name;
    public $phone;
    public $symptom;

    /**
     * Create a new message instance.
     *
     * @param mixed $shipment
     * @return void
     */
    public function __construct($email, $page_from, $name, $phone, $symptom)
    {
        $this->email = $email;
        $this->page_from = $page_from;
        $this->name = $name;
        $this->phone = $phone;
        $this->symptom = $symptom;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->email;
        $page_from = $this->page_from;
        $name = $this->name;
        $phone = $this->phone;
        $symptom = $this->symptom;

        return $this->to('dmytrovolod911@gmail.com')
                ->subject(trans('Mail From ',['email' => $email, 'page_from' => $page_from, 'name' => $name, 'phone' => $phone, 'message' => $symptom]))
                ->view('shop::emails.sales.new-new');
    }
}
