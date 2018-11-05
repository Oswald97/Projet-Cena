<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CentreVote extends Model
{
	protected $fillable = [
        'nom_centre','arrondissement_id',
    ];

    public function arrondissement(){
    	return $this->belongsTo('App\Arrondissement');
    }

    public function bureauVotes(){
    	return $this->hasMany('App\BureauVote');
    }
}
