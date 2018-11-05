<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminBureau extends Model
{
	protected $fillable = [
        'user_id','bureau_vote_id',
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function bureau(){
    	return $this->belongsTo('App\BureauVote');
    }
}
