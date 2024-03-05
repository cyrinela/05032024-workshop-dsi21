<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
   public function getContact(){
    //creer une variable msg 
    $c1 = new Contact();
    $message = $c1->getContact();
    //envoyer f wost page html mtaaey [ variable --> chnoi baathte ]
    return view("contact", ['message' => $message]);
   }
}
