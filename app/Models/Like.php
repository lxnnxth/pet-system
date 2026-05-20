<?php
// app/Models/Like.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Like extends Model
{
    protected $fillable = ['pet_id'];

    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id', 'pet_id');
    }
}




