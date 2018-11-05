<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminCentre extends Model
{
	protected $fillable = [
        'user_id','centre_vote_id',
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function centreVote(){
    	return $this->belongsTo('App\CentreVote');
    }

}
