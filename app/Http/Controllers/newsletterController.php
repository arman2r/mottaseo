<?php

namespace seoGraphic\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
//use Illuminate\Http\Requests;
use Illuminate\Support\Facades\DB;
use seoGraphic\seographicsdb;
use Mail;

class newsletterController extends Controller
{
    public function store(Request $request)
    {        
        //dd($request->all());
        
        /*
        $seographicsdb = new seographicsdb([
            'name' => $request->get('name'),
            'email' => $request->get('email')
        ]);
            */
        
        
        /*$validation = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
        ]);*/

        /*$error_array = array();
        $success_output = '';
        if($validation->fails())
        {
            foreach($validation->messages()->getMessages() as $field_name => $messages)
            {
                $error_array[] = $messages;
            }
        }
        else{
            if($request->get('button_action') == "REGISTRATE GRATIS!")
            {
                $usernews = new Usernews([
                    'name' => $request->get('name'),
                    'email' => $request->get('email')
                ]);

                $usernews->save();
                $success_output = '<div class="alert alert-succes">Usuario guardado</div>';
            }
        }

        $output = array (
            'error' => $error_array,
            'succes' => $success_output
        );*/
        
        //$data=$request::all();

        //$usuario = new User();
        //$usuario->nombre->$data('nombre');
        //$usuario->email->$data('email');

        //$result= $usuario->save();*/

        //seographicsdb::create(Request::all());

        //$usernews= new Usernews();
        //$usernews->nombre= $request()->name;
        //$usernews->email=$request->input('email');
        // add other fields
        //$usernews->save();

        

        //$this->validate($request, [
        //    'name' => 'required',
        //    'email' => 'required|email'
        //]);

        $validation = Validator::make($request->all(),[
            'name' => 'required|max:255',
            'email' => 'required|unique|max:50',
        ]);
        try{
            $seographicsdb = new seographicsdb([
                'name' => $request->get('name'),
                'email' => $request->get('email')
            ]);
            $seographicsdb->save();

            Mail::send('emails.newsletter-message', [
                'name' => $request->name,
                'email' => $request->email,
            ], function($mail) use($request) {
                $mail->from($request->email);
                $mail->to(['contactanos@seographics.com.co',$request->email])->subject('Nuevo Usuario Suscrit@');
            });
            $response = array(
                'status' => 'exito',
                'msg' =>"exito",
            );
        } catch(\Illuminate\Database\QueryException $ex){          
            $response = array(
                'status' => 'error',
                'msg' => 'Este email ya existe',
            );
        }

        return \Response::json($response);
    }
}
