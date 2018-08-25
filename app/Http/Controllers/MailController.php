<?php

namespace seoGraphic\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class MailController extends Controller
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
            'email' => 'required|email',
            'comment' => 'required'
        ]);

        Mail::send('emails.contact-message', [
			'name' => $request->name,
			'email' => $request->email,
			'movil' => $request->movil,
			'website' => $request->website,
            'comment' => $request->comment
        ], function($mail) use($request) {
            $mail->from($request->email);

            $mail->to(['contactanos@seographics.com.co',$request->email])->subject('Mensaje de contacto seographics.com.co');
            
        });

        $response = array(
            'status' => 'success',
            'msg' => 'Setting created successfully',
        );
        return \Response::json($response);

        /*return redirect()->back()->with('flash_message', 'Gracias por contar con nosotros.');*/
    }

   

    
}
