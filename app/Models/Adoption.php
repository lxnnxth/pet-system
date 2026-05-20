<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    use HasFactory;

    protected $table = 'adoptions';

    protected $fillable = [
        'pet_id',
        'full_name',
        'age',
        'email',
        'phone',
        'address',
        'role',
        'department',
        'year_level',
        'occupation',
        'home_type',
        'other_pets',
        'experience',
        'adoption_reason',
        'status'
    ];

    // Relationship: each adoption belongs to one pet
    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id');
    }
}
