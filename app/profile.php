<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $fillable = ['city', 'country', 'gender','user_id'];

public function profile()
{
    return $this->hasOne('App\profile');
}

}
