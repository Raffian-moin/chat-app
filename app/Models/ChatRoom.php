<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatRoom extends Model
{
    use HasFactory;
    //chatromm model
     public function messages(){
        return $this->hasMany('App\Models\ChatMessage');
    }
}
