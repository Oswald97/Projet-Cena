<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    protected $fillable = [
        'code','nom','prenom','email','role_id','arrondissement_id',
        'centre_vote_id','bureau_vote_id',
    ];

    public static function getCode()
	{
		//génération d'un code de 15 caractères de façon aléatoire
		$code= str_random(15);

		if(static::whereCode($code)->count() != 0 ){
			return getCode();
		}

		return $code;
	}

    public function role()
    {
        return $this->belongsTo('App\Role');
    }
    public function arrondissement()
    {
        return $this->belongsTo('App\Arrondissement');
    }
    public function centreVote()
    {
        return $this->belongsTo('App\CentreVote');
    }
    public function bureauVote()
    {
        return $this->belongsTo('App\BureauVote');
    }
}
