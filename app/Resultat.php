<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resultat extends Model
{
    protected $fillable=['bureauVote_id','partie_id','voix','send'];
    public function bureauVote(){
    	return $this->belongsTo('App\BureauVote');
    }

    public function parties(){
    	return $this->belongsTo('App\Partie');
    }
}
