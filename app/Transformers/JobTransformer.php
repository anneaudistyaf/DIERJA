<?php

namespace App\Transformers;

use App\Models\jobs;
use League\Fractal\TransformerAbstract;

class JobTransformer extends TransformerAbstract
{
    public function  transform(jobs $jobs)
    {
        return [
            'posisi' => $jobs->posisi,
            'disabilitas' => $jobs->disabilitas,
            'waktu' => $jobs->waktu,
            'Deskripsi' => $jobs->jobs_description,
        ];
    }
}
