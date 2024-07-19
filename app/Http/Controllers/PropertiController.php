<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PropertiController extends Controller
{
    public function index()
    {
        return view('frontend.pages.properti.index');

    }
}
