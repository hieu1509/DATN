<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //

    public function Contact()
    {
        return view('user.pages.contact');
    }


    public function MailContact(Request $request)
    {
        $yourEmail = config('mail.from.address');
        $email = $request->email;
        $phone = $request->phone;
        $name = $request->name;
        $dia_chi = $request->dia_chi;
        $chu_de = $request->chu_de;
        $contact = $request->contact;

        try {
            Mail::to($yourEmail,)->send(new ContactMail($yourEmail, $email, $phone, $name, $dia_chi, $chu_de, $contact));
            return redirect()->back()->with('success', 'Gui Thanh Cong');
        } catch (\Throwable $th) {
            return redirect()->back()->with('success', 'Gui Khong Thanh Cong');
        }
    }
}
