<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $table = 'pengajuans'; // Sesuaikan dengan nama tabel di basis data

    protected $fillable = [
        'nama_lengkap',
        'no_hp',
        'provinsi_id',
        'kota_id',
        'kecamatan_id',
        'kelurahan_id',
        'tipe_jaminan',
        'merk_motor_id',
        'merk_mobil_id',
        'nama_mobil',
        'nama_motor',
        'property',
        'sertifikat',
        'alamat_property',
        'tahun',
        'nominal_pinjaman',
    ];



    public function mobil()
    {
        return $this->belongsTo(Mobil::class, 'mobil_id');
    }

    // Definisi relasi dengan Merk
    public function merkMobil()
    {
        return $this->belongsTo(MerkMobil::class, 'merk_mobil_id');
    }
    public function motor()
    {
        return $this->belongsTo(Mobil::class, 'mobil_id');
    }

    // Definisi relasi dengan Merk
    public function merkMotor()
    {
        return $this->belongsTo(MerkMobil::class, 'merk_motor_id');
    }
    public function province()
    {
        return $this->belongsTo(Province::class, 'provinsi_id');
    }

    public function regency()
    {
        return $this->belongsTo(Regency::class, 'kota_id');
    }
    public function district()
    {
        return $this->belongsTo(District::class, 'kecamatan_id');
    }
    public function village()
    {
        return $this->belongsTo(Village::class, 'kelurahan_id');
    }


    // dan seterusnya sesuai dengan relasi yang diperlukan

}
