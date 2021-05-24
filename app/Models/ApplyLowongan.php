<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyLowongan extends Model
{
    use HasFactory;
    protected $table = 'apply_lowongans';
    protected $primaryKey = 'lowongan_id';
    protected $fillable = [
        'posisi',
        'nama',
        'status',
    ];
    public function company()
    {
        return $this->belongsTo(company::class, 'company_id');
    }
    public function jobs()
    {
        return $this->belongsTo(jobs::class, 'jobs_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
