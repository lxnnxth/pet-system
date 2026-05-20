<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'tblusers'; 

    protected $primaryKey = 'user_id';

    public $timestamps = false; 

    protected $fillable = [
        'username',
        'full_name',
        'email',
        'password',
        
    ];

    protected $hidden = [
        'password',
    ];
}
