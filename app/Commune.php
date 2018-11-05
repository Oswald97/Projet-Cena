<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
	protected $fillable = [
        'nom_commune','departement_id',
    ];
    public function departement(){
    	return $this->belongsTo('App\Departement');
    }
    public function arrondissements(){
    	return $this->hasMAny('App\Arrondissement');
    }
}
