<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\Http\Controllers\Controller;
use App\Models\MerkMobil;
use App\Models\Mobil;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('frontend.form-pengajuan');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'provinsi_id' => 'required|exists:provinces,id',
            'kota_id' => 'required|exists:regencies,id',
            'kecamatan_id' => 'required|exists:districts,id',
            'kelurahan_id' => 'required|exists:villages,id',
            'tipe_jaminan' => 'required|string|max:255',
            'merk_motor_id' => 'nullable|string|max:255', // Adjust based on your needs
            'merk_mobil_id' => 'nullable|string|max:255', // Adjust based on your needs
            'nama_mobil' => 'nullable|string|max:255', // Adjust based on your needs
            'nama_motor' => 'nullable|string|max:255', // Adjust based on your needs
            'property' => 'nullable|string|max:255', // Adjust based on your needs
            'sertifikat' => 'nullable|string|max:255', // Adjust based on your needs
            'alamat_property' => 'nullable|string|max:1000', // Adjust based on your needs
            'tahun' => 'nullable|string|max:255', // Adjust based on your needs
            'nominal_pinjaman' => 'required|string|max:255',
        ]);

        // Create a new Pengajuan instance
        $pengajuan = Pengajuan::create($validatedData);

        // Return a JSON response
        return response()->json([
            'success' => true,
            'message' => 'Pengajuan berhasil disimpan.',
            'data' => $pengajuan,
        ], 201); // 201 Created
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengajuan $pengajuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengajuan $pengajuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengajuan $pengajuan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengajuan $pengajuan)
    {
        //
    }
}
