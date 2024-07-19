<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Tampilkan halaman beranda.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.home');
    }

    /**
     * Tampilkan halaman root (redirect ke home).
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function root()
    {
        return redirect()->route('frontend.index');
    }
}
