<?php

namespace seoGraphic\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class newsletter extends Controller
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

        Mail::send('emails.contact-message', [
			'name' => $request->name,
			'email' => $request->email,			 
        ], function($mail) use($request) {
            $mail->from($request->email);
            $mail->to(['arman.2.r@gmail.com',$request->email])->subject('Contact Message');            
        });

        $response = array(
            'status' => 'success',
            'msg' => 'Setting created successfully',
        );
        return \Response::json($response);

        /*return redirect()->back()->with('flash_message', 'Gracias por contar con nosotros.');*/
    }
}
