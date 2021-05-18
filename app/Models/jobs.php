<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
    use HasFactory;
    protected $table = 'jobs';
    protected $primaryKey = 'jobs_id';
    public function company()
    {
        return $this->belongsTo(company::class, 'company_id');
    }
}
