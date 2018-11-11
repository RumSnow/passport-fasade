<?php

namespace App\Http\Controllers;

use App\Mail\MailClass;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller{

  public function send(Request $request){
    $email = $request->only('email');
//    dd($email);
    if(User::where($email)->get()){
      Mail::to('semenovra-es@ya.ru')->send(new MailClass($email));
      return redirect()->route('signForm')->with('проверьте почту');
    } else{
      return redirect()->route('signForm')->with('такого емайла не существует');
    }

  }

//  public function sendReset(){
//    Mail::send(['text'=>'auth.emails.resetLink'], ['name'=> 'от метя'], function($message){
//      $message->to('semenovra-es@ya.ru', 'для кого письмо')->subject('тестовое письмо');
//      $message->from('pasport@pf.com', 'от кого это письмо');
//    });
//  }
}
