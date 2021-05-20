<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelatihan extends Model
{
    use HasFactory;
    protected $table = 'pelatihans';
    protected $primaryKey = 'pelatihan_id';
    protected $fillable = [
        'judul',
        'author',
        'kategori',
        'thumbnail',
        'video',
        'deskripsi',


    ];
    // public function kategori()
    // {
    //     return $this->hasOne(kategori::class);
    // }
}
