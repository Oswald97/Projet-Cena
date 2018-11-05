<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BureauVote extends Model
{
	protected $fillable = [
        'numero','centre_id',
    ];
    public function centreVote(){
    	return $this->belongsTo('App\CentreVote');
    }
    public function resultats(){
    	return $this->hasMany('App\Resultat');
    }
     public function adminBureaus(){
    	return $this->hasMany('App\AdminBureau');
    }
}
