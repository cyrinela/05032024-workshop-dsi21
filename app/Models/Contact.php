<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
   
    public function getContact(){
        $message = "hello dsi21";
        return  $message;

    }
}
