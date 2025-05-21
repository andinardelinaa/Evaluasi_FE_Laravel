<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
{
    if (view()->exists('layouts.main')) {
        return view('layouts.main');
    } else {
        return "View layouts.dashboard tidak ditemukan!";
    }
}

}
