<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPayment extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function user(){
      return  $this->belongsTo(User::class,'user_id','id');
    }

    public function webhosting(){
     return   $this->belongsTo(webHosting::class,'web_hosting_id','id');
    }

}
