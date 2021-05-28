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
        'kategori_id',
        'thumbnail',
        'video',
        'deskripsi',



    ];
    public function kategori()
    {
        return $this->belongsTo(kategori::class, 'kategori_id');
    }
}
