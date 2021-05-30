<?php

namespace App\Http\Controllers;

use App\Models\sharing_post;
use Illuminate\Http\Request;

class SharingController extends Controller
{
    private $disabilitas = [0 => 'Tuna rungu', 1 => 'Tuna wicara', 2 => 'Lumpuh', 3 => 'Disleksia',];
    public function index()
    {
        $disabilitas = $this->disabilitas;
        $sharing = sharing_post::all();
        return view('sharing', compact('sharing', 'disabilitas'));
    }
}
