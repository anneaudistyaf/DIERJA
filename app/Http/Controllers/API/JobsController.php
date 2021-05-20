<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\jobs;

use Illuminate\Http\Request;
use App\Transformers\JobTransformer;

class JobsController extends Controller
{
    public function jobs(jobs $jobs)
    {
        $jobs = $jobs->all();
        return fractal()
            ->collection($jobs)
            ->transformWith(new JobTransformer)
            ->toArray();
    }
}
