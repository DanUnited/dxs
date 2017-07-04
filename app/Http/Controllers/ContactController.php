<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ContactController extends Controller {

    public function sendMessage(Request $request)
    {
        $v = Validator::make($request->all(), [
            'email' => 'required|email',
            'name' => 'required|alpha_dash',
            'message'=>'required'
        ]);

        if ($v->fails())
        {
            return redirect('contacts')->withErrors($v);
        }
    }

}