<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
      public function city(){
       return $this->belongsTo('App\City');
    }
	/*const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
    public $timestamps = false;*/
}
