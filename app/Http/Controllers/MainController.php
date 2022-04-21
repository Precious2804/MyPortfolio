<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //

    public function contact(Request $request){
        $result = ContactUs::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message
        ]);

        if ($result){
            return back()->with('success', "Thank You for Reaching Out to Presh_dev, I'd definately be at your Service, You can as well Call my Mobile Number or drop an email or even a Whatsapp Message for a faster communication");
        } else {
            return back()->with('faile', "Sorry, you were not able to contact Presh_dev, Please try again later. Thanks");
        }
    }
}
