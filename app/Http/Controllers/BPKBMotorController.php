<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BPKBMotorController extends Controller
{
    public function index()
    {
        return view('frontend.pages.bpkb-motor.index');
    }
}
