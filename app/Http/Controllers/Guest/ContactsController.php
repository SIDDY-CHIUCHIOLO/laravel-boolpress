<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Mail\SendNewMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function contact(){
        return view('guest.contact');
    }

    public function contactEmailStore(Request $request){
        
        Mail::to( $request->guestEmail)->send(new SendNewMail( $request->guestName, $request->guestEmail, $request->mailMessage));
        return redirect()->route('guest.thanks')->with('message', $request->guestName . ' hai appena inviato la tua email correttamente');
    }

    public function thanks(){
        return view('guest.thanks');
        
    }
}
