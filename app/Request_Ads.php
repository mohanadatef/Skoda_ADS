<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Request_Ads extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'email', 'mobile','last_name','city','car_model','kind_request'
    ];
    protected $table = 'request_ads';
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
