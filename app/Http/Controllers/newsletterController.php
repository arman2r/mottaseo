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

        DB::table('Order_table')->insert(
            ['name' => $request->name,
            'email' => $request->email]
        );

        Mail::send('emails.newsletter-message', [
			'name' => $request->name,
			'email' => $request->email,
        ], function($mail) use($request) {
            $mail->from($request->email);
            $mail->to(['arman.2.r@gmail.com',$request->email])->subject('Nuevo Usuario Suscrit@');
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
