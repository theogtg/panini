<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Entry;
use App\Code;
use Validator;

class RegistrationController extends Controller
{
   public function create()
   {
   	return view('sessions.create'); 
   }

   public function store(Request $request)
   {
      //dd($request->all());
   	// Validate the form.
      $entry = new Entry;
   	$validator = Validator::make($request->all(), [
   			'firstName' => 'required',
   			'lastName' => 'required',
            'address' => 'required',
   			'city' => 'required',
   			'state' => 'required',
   			'zip' => 'required',
   			'phone' => 'required',
            'email' => 'required',
   		]);

   	// Create and save the user.
   	$user = User::create(request(['firstName', 'lastName', 'address', 'city', 'state', 'zip', 'phone', 'email', 'opt']));
      //$user->save();
      //set code to used
      $code = Code::where('code', $request->session()->get('code', 'promoCode'))->first();
      //add entry
      $entry->user_id = $user->id;
      $entry->code_id = $code->id;
      $code->used = 1;
      $entry->form_completed = 'Y';
      $entry->save();
      $code->save();

      session()->flush();
   	// Redirect to thanks page.
      return redirect('/thanks');
   }
}
