<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\profile;

class User extends Authenticatable
{
    use Notifiable;



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'slug', 'gender', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

   // public function getRouteKeyName(){
     //   return 'name';
    //}
    public function user()
    {
        return $this->belongsTo('App\User');

    }

    public function findForPassport($identifier) {
        return User::orWhere('email', $identifier)->where('status', 0)->first();
    }
}
