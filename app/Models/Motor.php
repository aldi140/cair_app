<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_motor',
        'merk_id',
    ];

    public function merk()
    {
        return $this->belongsTo(MerkMotor::class, 'merk_id');
    }
}
