<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\jobs;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function jobs(jobs $jobs)
    {
        $jobs = $jobs->all();
        return response()->json($jobs);
    }
}
