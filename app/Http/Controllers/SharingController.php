<?php

namespace App\Http\Controllers;

use App\Models\sharing_post;
use Illuminate\Http\Request;

class SharingController extends Controller
{
    private $disabilitas = [0 => 'Tuna rungu', 1 => 'Tuna wicara', 2 => 'Lumpuh', 3 => 'Disleksia'];
    public function index()
    {
        $sharing = sharing_post::all();
        $ds = $this->disabilitas;
        return view('sharing', compact('sharing', 'ds'));
    }
}
