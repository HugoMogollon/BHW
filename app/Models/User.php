<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use Spatie\Permission\Traits\HasRoles;
use Caffeinated\Shinobi\Traits\ShinobiTrait;

class User extends Authenticatable
{
	use Notifiable;
	//use HasRoles;
    use ShinobiTrait;
	
    /**
     * The attributes that are mass assignable.
     *'tipo_cuenta',
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
