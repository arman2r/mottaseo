<?php

namespace seoGraphic\Http\Controllers;

use Mail;
use seoGraphic\usernews;
use Illuminate\Http\Request;

class newsletterController extends Controller
{

    public function create()
	{
		return view('index');
	}

    public function store(Request $request)
    {        
        /*dd($request->all());*/
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email'
        ]);

        //$usernews= new usernews();
        //$usernews->nombre= $request['name'];
        //$usernews->email= $request['email'];
        // add other fields
        //$usernews->save();
/*
        DB::table('usernews')->insert(
            ['name' => $request->nombre,
            'email' => $request->email]
        );
*/
        Mail::send('emails.newsletter-message', [
			'name' => $request->name,
			'email' => $request->email,
        ], function($mail) use($request) {
            $mail->from($request->email);
            $mail->to(['contactanos@seographics.com.co',$request->email])->subject('Nuevo Usuario Suscrit@');
        });

        $response = array(
            'status' => 'success',
            'msg' => 'Setting created successfully',
        );

        /*$usernews = new UserNews;
        $usernews->name = $request->input('name');
        $usernews->email = $request->input('email');
        $usernews->save();*/

        return \Response::json($response);

        /*return redirect()->back()->with('flash_message', 'Gracias por contar con nosotros.');*/
    }
}
