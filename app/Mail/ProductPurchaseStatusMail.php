<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ProductPurchaseStatusMail extends Mailable
{
    use Queueable, SerializesModels;

    public $productPurchase;

    public function __construct($productPurchase)
    {
        $this->productPurchase = $productPurchase;
    }

    public function build()
    {
        return $this->subject('Product Status Notification')
                    ->view('emails.productPurchaseStatus');
    }
}
