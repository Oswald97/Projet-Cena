<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom','prenom', 'email', 'password','telephone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /*
    |
    |Méthode pour avoir le role de l'utilisateur:
    |
    */

    public function hasRole($role)
    {
        return null !== $this->roles()->where('nom', $role)->first();
    }
    
    /*
    |
    |Méthode pour avoir le nom et le prénon de l'utilisateur
    |connecté
    |
    */
    
    public function fullName(){
        $full= $this->nom." ".$this->prenom;
        return $full;
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role','role_user','user_id','role_id');
    }
    public function adminCenas(){
        return $this->hasMany('App\AdminCena');
    }
    public function adminArrondissements(){
        return $this->hasMany('App\AdminArrondissement');
    }
    public function adminCentres(){
        return $this->hasMany('App\AdminCentre');
    }
    public function adminBureaus(){
        return $this->hasMany('App\AdminBureau');
    }
}
