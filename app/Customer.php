<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name','email','department'];

    public function serviceRequests()
    {
        return $this->hasMany('App\ServiceRequests');
    }
}
