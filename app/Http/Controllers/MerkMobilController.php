<?php

namespace App\Http\Controllers;

use App\Models\MerkMobil;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MerkMobilController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
    
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.mobil.create-merk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'merk.*' => 'nullable|string|max:255',
        ]);

        try {
            // Inisialisasi array untuk menyimpan merk yang sudah ada
            $existingMerks = [];

            // Cek dan simpan data merk mobil
            foreach ($request->merk as $value) {
                $value = strtoupper($value);
                if (MerkMobil::where('merk', $value)->exists()) {
                    $existingMerks[] = $value;
                } else {
                    MerkMobil::create([
                        'merk' => $value,
                    ]);
                }
            }

            // Jika ada merk yang sudah ada, tampilkan pesan kesalahan
            if (!empty($existingMerks)) {
                return response()->json([
                    'error' => 'Data Merk Mobil sudah ada',
                    'existing_merks' => $existingMerks
                ], 409);
            }

            // Response sukses
            return response()->json(['message' => 'Data Merk Mobil berhasil disimpan'], 200);
        } catch (\Exception $e) {
            // Response error
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }




    /**
     * Display the specified resource.
     */
    public function show(MerkMobil $merkMobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MerkMobil $merkMobil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MerkMobil $merkMobil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MerkMobil $merkMobil)
    {
        //
    }
}
