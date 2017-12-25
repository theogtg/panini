<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Code;


class FormsController extends Controller

{

    public function codeGate()
    {
        //show welcome view
        return view('welcome');
    }

    public function codeGatePost(Request $request)
    {
        //create new form using the request data
        $code = $request->promoCode;
        $test = Code::where('code', '=', $code)->first();
        if($test == null || $test->used == 1){
            //redirect to sorry page
            return redirect('/sorry');
        }
        else{
            //possibly add code to registration page
            session()->put([
                'code' => request('promoCode')
            ]);
            //redirect
            return redirect('/email');
        }
    }
}
