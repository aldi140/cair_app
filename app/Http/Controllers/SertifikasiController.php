<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SertifikasiController extends Controller
{
    public function index()
    {
        return view('frontend.pages.sertifikasi.index');
    }
}
