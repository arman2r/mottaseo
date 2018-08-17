<?php

namespace seoGraphic\Http\Controllers;
use Illuminate\Support\Facades\Input;
use App\User;
use Mail;
use Session;
use Redirect;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function store(Request $request){
        /*$contactName = Input::get('name');
		$contactEmail = Input::get('email');
		$contactMovil = Input::get('movil');
		$contactWebsite = Input::get('website');
		$contactMensaje = Input::get('comment');*/

		$data = array(
			'name'=>$request->name, 
			'email'=>$request->email, 
			'movil'=>$request->movil,
			'website'=>$request->website,
			'comment'=>$request->comment,
		);
 
    	Mail::send('emails.contact', $data, function($message) use ($data){

			/*$m->from('hello@app.com', 'Your Application');

            $m->to($user->email, $user->name)->subject('Your Reminder!');*/
			/*$message->subject('Correo de contácto');*/
			$message->from('arman.2.r@gmail.com');
			$message->to($data['email']);
			$message->replyTo($data['email']);
		});	
		
		return redirect()->back()->with('flash_message', 'gracias por contar con nosotros.');
    }
}
