<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Http\Controllers\Controller;
use App\Models\MerkMobil;
use Illuminate\Http\Request;

class MobilController extends Controller
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
        $merkMobils = MerkMobil::all();
        if (request()->ajax()) {

            $mobils = Mobil::with('merk')->get();

            return response()->json(['mobils' => $mobils]);
        }
        return view('backend.mobil.index', compact('merkMobils'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $merkMobils = MerkMobil::all();
        return view('backend.mobil.index', compact('merkMobils'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_mobil' => 'required|string|max:255',
            'merk_id' => 'required',
        ]);

        // Check if the car already exists
        $existingMobil = Mobil::where('merk_id', $request->merk_id)->where('nama_mobil', $request->nama_mobil)->first();
        if ($existingMobil) {
            return response()->json(['message' => 'Data Mobil sudah ada'], 409);
        }

        // Create new car record
        $data = Mobil::create([
            'nama_mobil' => $request->nama_mobil,
            'merk_id' => $request->merk_id,
        ]);

        // Check if data is successfully saved
        if (!$data) {
            return response()->json(['message' => 'Data gagal disimpan'], 500);
        }

        return response()->json(['message' => 'Data Mobil berhasil disimpan'], 200);
    }


    /**
     * Display the specified resource.
     */
    public function show(Mobil $mobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mobil $mobil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mobil $mobil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mobil $mobil)
    {
        //
    }
}
