<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caffe extends Model
{
   protected $fillable = ['name', 'address', 'phone']; 

   public function comments(){


   	return $this->hasMany('App\Comment', 'caffe_id');

   }


}
