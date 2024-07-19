<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class DataPengajuanController extends Controller
{
    public function dataMobil()
    {
        if (request()->ajax()) {
            $datas = Pengajuan::select(
                'nama_lengkap',
                'no_hp',
                'provinsi_id',
                'kota_id',
                'kecamatan_id',
                'kelurahan_id',
                'tipe_jaminan',
                'merk_mobil_id',
                'nama_mobil',
                'tahun',
                'nominal_pinjaman',
                'created_at'
            )
                ->with(['mobil', 'merkMobil', 'province', 'regency', 'district', 'village']) // Load relasi mobil dan merk
                ->where('tipe_jaminan', 'BPKB Mobil')
                ->get();

            return response()->json(['datas' => $datas]);
        }

        return view('backend.pengajuan.mobil.index');
    }

    public function showMobil($id)
    {
        $data = Pengajuan::where('tipe_jaminan', 'BPKB Mobil')->where('id', $id)->first();
        return view('backend.pengajuan.mobil.show', compact('data'));
    }
    public function dataMotor()
    {
        if (request()->ajax()) {
            $datas = Pengajuan::select(
                'nama_lengkap',
                'no_hp',
                'provinsi_id',
                'kota_id',
                'kecamatan_id',
                'kelurahan_id',
                'tipe_jaminan',
                'merk_motor_id',
                'nama_motor',
                'tahun',
                'nominal_pinjaman',
                'created_at'
            )
                ->with(['motor', 'merkMotor', 'province', 'regency', 'district', 'village']) // Load relasi motor dan merk
                ->where('tipe_jaminan', 'BPKB Motor')
                ->get();

            return response()->json(['datas' => $datas]);
        }

        return view('backend.pengajuan.motor.index');
    }
    public function dataProperty()
    {
        if (request()->ajax()) {
            $datas = Pengajuan::select(
                'nama_lengkap',
                'no_hp',
                'provinsi_id',
                'kota_id',
                'kecamatan_id',
                'kelurahan_id',
                'tipe_jaminan',
                'property',
                'sertifikat',
                'alamat_property',
                'nominal_pinjaman',
                'created_at'
            )

                ->with(['province', 'regency', 'district', 'village']) // Load relasi motor dan merk
                ->where('tipe_jaminan', 'Property')
                ->get();

            return response()->json(['datas' => $datas]);
        }

        return view('backend.pengajuan.property.index');
    }
    public function dataSertifikasi()
    {
        if (request()->ajax()) {
            $datas = Pengajuan::select(
                'nama_lengkap',
                'no_hp',
                'provinsi_id',
                'kota_id',
                'kecamatan_id',
                'kelurahan_id',
                'tipe_jaminan',
                'nominal_pinjaman',
                'created_at'
            )

                ->with(['province', 'regency', 'district', 'village']) // Load relasi motor dan merk
                ->where('tipe_jaminan', 'Sertifikat PNS, GURU/DOSEN')
                ->get();

            return response()->json(['datas' => $datas]);
        }

        return view('backend.pengajuan.sertifikasi.index');
    }
}
