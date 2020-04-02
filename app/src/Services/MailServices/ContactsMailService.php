<?php

namespace App\src\Services\MailServices;

use Illuminate\Support\Facades\Mail;

class ContactsMailService
{
    public function __construct()
    {
    }

    public function send($data)
    {
       Mail::send('mail/templates/contacts', [
           'email' => $data->email,
           'phone' => $data->phone,
           'text' => $data->message,
       ], function($message) {
           $message->to(env('ADMIN_EMAIL', 'info@mcode.su'))
               ->subject(trans('mcode.emails.contacts.subject'));
       });
    }
}