<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    protected $fillable = [
        'chemin','id_user'
    ];
}
