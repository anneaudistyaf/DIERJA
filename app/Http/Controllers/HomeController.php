<?php

namespace App\Http\Controllers;

use App\Models\jobs;
use App\Models\pelatihan;
use App\Models\sharing_post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $disabilitas = [0 => 'Tuna rungu', 1 => 'Tuna wicara', 2 => 'Lumpuh', 3 => 'Disleksia',];
    public function index()
    {
        $jobs = jobs::all();
        $sharing = sharing_post::all();
        $pelatihan = pelatihan::all();
        $disabilitas = $this->disabilitas;
        return view('homepage', compact('jobs', 'sharing', 'pelatihan', 'disabilitas'));
    }
}
