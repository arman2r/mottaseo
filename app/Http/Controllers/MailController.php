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

            $mail->to('lex7601@gmail.com')->subject('Contact Message');
        });

        return redirect()->back()->with('flash_message', 'Gracias por contar con nosotros.');
    }
}
