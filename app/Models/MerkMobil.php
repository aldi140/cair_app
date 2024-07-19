<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MerkMobil extends Model
{
    use HasFactory;

    protected $fillable = [
        'merk'
    ];

    public function mobils()
    {
        return $this->hasMany(Mobil::class, 'merk_id');
    }
}
