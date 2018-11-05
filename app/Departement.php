<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
	protected $fillable = [
        'nom_departement',
    ];
    
    public function communes(){
    	return $this->hasMany('App\Commune');
    }
}
