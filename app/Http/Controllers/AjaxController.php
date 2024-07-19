<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\MerkMobil;
use App\Models\MerkMotor;
use App\Models\Mobil;
use App\Models\Motor;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getMerk()
    {
        $merk = MerkMobil::all();
        return response()->json([
            'success' => true,
            'data' => $merk
        ]);
    }

    public function getMobil(Request $request)
    {
        $merk_id = $request->input('merk_id');
        $mobil = Mobil::where('merk_id', $merk_id)->get();
        return response()->json([
            'success' => true,
            'data' => $mobil
        ]);
    }

    public function getMerkMotor()
    {
        $merkMotor = MerkMotor::all();
        return response()->json([
            'success' => true,
            'data' => $merkMotor
        ]);
    }

    public function getMotor(Request $request)
    {
        $merk_id = $request->input('merk_id');
        $motor = Motor::where('merk_id', $merk_id)->get();
        return response()->json([
            'success' => true,
            'data' => $motor
        ]);
    }

    public function getProvinsi()
    {
        $province = Province::all();
        return response()->json([
            'success' => true,
            'data' => $province
        ]);
    }
    public function getKota(Request $request)
    {
        $province_id = $request->input('province_id');
        $regency = Regency::where('province_id', $province_id)->get();
        return response()->json([
            'success' => true,
            'data' => $regency
        ]);
    }
    public function getKecamatan(Request $request)
    {
        $regency_id = $request->input('regency_id');
        $district = District::where('regency_id', $regency_id)->get();
        return response()->json([
            'success' => true,
            'data' => $district
        ]);
    }
    public function getKelurahan(Request $request)
    {
        $district_id = $request->input('district_id');
        $village = Village::where('district_id', $district_id)->get();
        return response()->json([
            'success' => true,
            'data' => $village
        ]);
    }
}
