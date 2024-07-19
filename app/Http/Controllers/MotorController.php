<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use App\Models\MerkMotor;
use Illuminate\Http\Request;

class MotorController extends Controller
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
        $merkMotors = MerkMotor::all();
        if (request()->ajax()) {
            $motors = Motor::with('merk')->get();
            return response()->json(['motors' => $motors]);
        }
        return view('backend.motor.index', compact('merkMotors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $merkMotors = MerkMotor::all();
        return view('backend.motor.index', compact('merkMotors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_motor' => 'required|string|max:255',
            'merk_id' => 'required',
        ]);

        $existingMotor = Motor::where('merk_id', $request->merk_id)
            ->where('nama_motor', $request->nama_motor)
            ->first();

        if ($existingMotor) {
            return response()->json(['message' => 'Data Motor sudah ada'], 409);
        }

        $data = Motor::create([
            'nama_motor' => $request->nama_motor,
            'merk_id' => $request->merk_id,
        ]);

        if (!$data) {
            return response()->json(['message' => 'Data gagal disimpan'], 500);
        }

        return response()->json(['message' => 'Data Motor berhasil disimpan'], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Motor $motor)
    {
        return response()->json(['motor' => $motor], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Motor $motor)
    {
        $request->validate([
            'nama_motor' => 'required|string|max:255',
            'merk_id' => 'required',
        ]);

        $existingMotor = Motor::where('merk_id', $request->merk_id)
            ->where('nama_motor', $request->nama_motor)
            ->first();

        if ($existingMotor && $existingMotor->id != $motor->id) {
            return response()->json(['message' => 'Data Motor sudah ada'], 409);
        }

        $motor->update([
            'nama_motor' => $request->nama_motor,
            'merk_id' => $request->merk_id,
        ]);

        return response()->json(['message' => 'Data Motor berhasil diperbarui'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Motor $motor)
    {
        $motor->delete();
        return response()->json(['message' => 'Data Motor berhasil dihapus'], 200);
    }
}
