<?php

namespace App\Http\Controllers;

use App\Models\sharing_post;
use Illuminate\Http\Request;

class SharingController extends Controller
{
    public function index()
    {
        $sharing = sharing_post::all();
        return view('sharing', compact('sharing'));
    }
}
