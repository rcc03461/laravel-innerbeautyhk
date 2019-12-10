<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\Mailsend;

class MailsendController extends Controller
{
    public function mailsend()
    {
        $data['title'] = "This is Test Mail Tuts Make";

        \Mail::send('emails.neworder', $data, function ($message) {

            $message->to('ych8815@gmail.com', 'Receiver Name')

                ->subject('Tuts Make Mail');
        });

        if (\Mail::failures()) {
            return response()->Fail('Sorry! Please try again latter');
        } else {
            return response()->success('Great! Successfully send in your mail');
        }
    }
}
