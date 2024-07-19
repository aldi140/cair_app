<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_mobil',
        'merk_id',
    ];

    public function merk()
    {
        return $this->belongsTo(MerkMobil::class, 'merk_id');
    }
}
