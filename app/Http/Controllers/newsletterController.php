<?php

namespace seoGraphic\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use Illuminate\Support\Facades\DB;
use seoGraphic\seographicsdb;
use Validator;
use Mail;

class newsletterController extends Controller
{
    public function store(Request $request)
    {        
        //dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $data=$request::all();

        $usuario = new User();
        $usuario->nombre->$data('nombre');
        $usuario->email->$data('email');

        $result= $usuario->save();

        //seographicsdb::create(Request::all());

        //$usernews= new Usernews();
        //$usernews->nombre= $request()->name;
        //$usernews->email=$request->input('email');
        // add other fields
        //$usernews->save();
        
        Mail::send('emails.newsletter-message', [
			'nombres' => $request->name,
			'email' => $request->email,
        ], function($mail) use($request) {
            $mail->from($request->email);
            $mail->to(['contactanos@seographics.com.co',$request->email])->subject('Nuevo Usuario Suscrit@');
        });

        
        $response = array(
            'status' => 'success',
            'msg' => 'Setting created successfully',
        );

        return \Response::json($response);
    }
}
