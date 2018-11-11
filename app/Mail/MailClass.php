<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;

class MailClass extends Mailable{

  protected $email;

  use Queueable, SerializesModels;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct($email){
    $this->email = $email;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build(){
    $token = DB::table('password_resets')->where($this->email)->get()->pluck('token')->all();
    return $this->view('auth.emails.resetLink', [
      'token'=>urlencode($token[0]),
      'email'=> $this->email['email']])
      ->subject('Новое письмо');
  }


}
