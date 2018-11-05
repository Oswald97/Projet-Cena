<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminArrondissement extends Model
{
	protected $fillable = [
        'user_id','arrondissement_id',
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function arrondissement(){
    	return $this->belongsTo('App\Arrondissement');
    }
}
