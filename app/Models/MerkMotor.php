<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MerkMotor extends Model
{
    use HasFactory;
    protected $fillable = [
        'merk'
    ];

    public function motors()
    {
        return $this->hasMany(Motor::class, 'merk_id');
    }
}
