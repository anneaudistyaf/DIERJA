<?php

namespace App\Http\Controllers\company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\jobs;
use App\Models\pelatihan;
use App\Models\sharing_post;


class CompanyController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:company');
    }

    public function index()
    {

        $jobs = jobs::all();
        $sharing = sharing_post::all();
        $pelatihan = pelatihan::all();
        return view('homepage', compact('jobs', 'sharing', 'pelatihan'));
    }
}
