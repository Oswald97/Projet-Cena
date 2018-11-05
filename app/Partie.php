<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partie extends Model
{
	protected $fillable = [
        'nom_partie',
    ];

    public function resultats(){
    	return $this->hasMany('App\Resultat');
    }
}
