<?php

namespace App\Http\Controllers;

use App\Models\jobs;
use App\Models\pelatihan;
use App\Models\sharing_post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $jobs = jobs::all();
        $sharing = sharing_post::all();
        $pelatihan = pelatihan::all();
        return view('homepage', compact('jobs', 'sharing', 'pelatihan'));
    }
}
