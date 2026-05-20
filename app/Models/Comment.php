<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['pet_id', 'name', 'comment']; // include other fields if needed

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
}
