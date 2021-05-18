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
}
