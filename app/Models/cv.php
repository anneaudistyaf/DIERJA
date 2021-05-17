<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cv extends Model
{
    use HasFactory;
    protected $fillable = [
        'keahlian',
        'pengalamanKerja',
        'tahunAwalKerja',
        'tahunAkhirKerja',
        'deskripsiKerja',
        'edukasi',
        'edukasiTahunAwal',
        'edukasiTahunAkhir',
        'skill',
        'sosialMedia',
        'optionSosialMedia',
    ];
    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
