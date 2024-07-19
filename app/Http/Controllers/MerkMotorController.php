<?php

namespace App\Http\Controllers;

use App\Models\MerkMotor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MerkMotorController extends Controller
{
    /**
     * Display a listing of the resource.
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
        return view('backend.motor.create-merk');
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
                if (MerkMotor::where('merk', $value)->exists()) {
                    $existingMerks[] = $value;
                } else {
                    MerkMotor::create([
                        'merk' => $value,
                    ]);
                }
            }

            // Jika ada merk yang sudah ada, tampilkan pesan kesalahan
            if (!empty($existingMerks)) {
                return response()->json([
                    'error' => 'Data Merk Motor sudah ada',
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
    public function show(MerkMotor $merkMotor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MerkMotor $merkMotor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MerkMotor $merkMotor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MerkMotor $merkMotor)
    {
        //
    }
}
