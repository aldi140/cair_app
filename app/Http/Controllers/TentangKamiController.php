<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    public function index()
    {
        return view('frontend.pages.tentang-kami.index');
    }
}
