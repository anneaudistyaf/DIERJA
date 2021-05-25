<?php

namespace App\Http\Controllers;

use App\Models\pelatihan;
use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    public function index()
    {
        $pelatihan = pelatihan::all();
        return view('pelatihan', compact('pelatihan'));
    }
    public function detailpelatihan($id)
    {
        $pelatihan = pelatihan::find($id);
        return view('detailpelatihan', compact('pelatihan'));
    }
}
