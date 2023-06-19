<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;



class ContactmailController extends Controller
{
    public function contactmail(Request $request)
    {

        $request->validate([
            'name'                  => 'required',
            'email'                 => 'required|email',
            'message'               => 'required',
        ]);

        try {

            $data = array(
                'name'              => $request->name,
                'email'             => $request->email,
                'message'           => $request->message,
            );

            //  Send mail to admin
            $mailTo = env('MAIL_TO');
            Mail::to($mailTo)->send(new Contact($data));
            return redirect()->back()->with('success','Your Information Send Success');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }
}
