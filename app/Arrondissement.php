<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arrondissement extends Model
{
	protected $fillable = [
        'nom_arrondissement','commune_id',
    ];

    public function commune(){
    	return $this->belongsTo('App\Commune');
    }
    public function centreVotes(){
    	return $this->hasMany('App\CentreVote');
    }
    public function adminArrondissements(){
    	return $this->hasMany('App\AdminArrondissement');
    }
}
