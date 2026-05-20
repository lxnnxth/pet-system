<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Pet extends Model
{
use HasFactory;

protected $table = 'tblpost'; 

    protected $primaryKey = 'pet_id';

    protected $fillable = [
        'pet_name',
        'type',
        'breed',
        'age',
        'description',
        'media',
        'last_seen',
        "status",
        'owner_name',
        'owner_contact',
        "owner_email",
        

    ];  
    public $timestamps = true;


    public function comments()
{
    return $this->hasMany(Comment::class, 'pet_id', 'pet_id');
}

public function adoptions()
{
    return $this->hasMany(Adoption::class, 'pet_id');
}
// Pet.php
public function likes()
{
    return $this->hasMany(Like::class, 'pet_id', 'pet_id');
}



}


