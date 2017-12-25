<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use App\User;
use App\Entry;
use App\Code;

class EmailController extends Controller
{
   public function emailGate()
   {
   	return view('sessions.email');
   }

   public function emailGatePost(Request $request) 
   {
      $entry = new Entry;
      //validate user
      $this->validate(request(),[
         'email' => 'required|email' 
      ]);
      //$email = $request->email;
   	$user = User::where('email', $request->email)->first();
      $code = Code::where('code', $request->session()->get('code', 'promoCode'))->first();
   	if ($user == null){
   		//user exists - add email to registration page
         session()->put([
            'email' => request('email')
         ]);
         //redirect to register page
   		return redirect('/register');
   	}
   	else{
   		//user does exist
   		//add code to user
         $entry->user_id = $user->id;
         $entry->code_id = $code->id;
         $code->used = 1;
         $entry->save();
         $code->save();
         //redirect to thanks page
   		return redirect('/thanks');
   	}
   }
}
