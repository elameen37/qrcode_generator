<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;


class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
    public function __construct(array $data)
    {
        $this->data=$data;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope(): Envelope 
    {
        return new Envelope(
            from: new Address('lmninfohub37@gmail.com'),
            //subject: $this->data['subject'],
            // message: $this->data['message']
            
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {

           return $this->subject('New Contact Message')->view('emails.ContactMail');

        // return new Content(
        //     view: 'emails.ContactMail',
        // );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    // public function attachments(): array
    // {
    //     return [
    //         Attachment::fromStorage($this->data['path'])
    //     ];
    // }
}