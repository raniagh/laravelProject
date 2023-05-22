<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Image;
use Storage;
use App\Mailfile;
use App\Service;

class MailController extends Controller{


  public function getContact()
    {
        
        return view('contact.mail'); 
     }


public function show(){


	return view ('contact.mail');
}

   public function PostContact(Request $request){

 
  $this->validate($request, [
'email'=> 'required|email',
'subject' => 'min:3',
'message' => 'required',

]);

$data = array(
'email'=>$request->email,
'subject' => $request->subject,
'bodyMessage' => $request->message,


	);


	Mail:: send('contact.sendmail', $data,function($message) use ($data){
		$message->from('ghzaielrania@gmail.com');
		$message->to($data['email']);
		$message->subject($data['subject']);

});
	

 $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
       $count=count($nouveau_services);
      
  return redirect(route('services.index'))->with('message','Votre message est envoyé avec succés');

}
   
}
