<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BPKBMobilController extends Controller
{
    public function index()
    {
        return view('frontend.pages.bpkb-mobil.index');
    }
}
