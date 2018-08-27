<?php

namespace seoGraphic\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use DB;

class newsletterController extends Controller
{

    public function create()
	{
		return view('index');
	}

    public function store(Request $request)
    {        
        //dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email'
        ]);
        
        Mail::send('emails.newsletter-message', [
			'nombres' => $request->name,
			'email' => $request->email,
        ], function($mail) use($request) {
            $mail->from($request->email);
            $mail->to(['contactanos@seographics.com.co',$request->email])->subject('Nuevo Usuario Suscrit@');
        });

        $usernews= new Usernews();
        $usernews->nombre= $request['name'];
        $usernews->email= $request['email'];
        // add other fields
        $usernews->save();

        $response = array(
            'status' => 'success',
            'msg' => 'Setting created successfully',
        );

        return \Response::json($response);
    }
}
