<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    protected $table = 'kategoris';
    protected $primaryKey = 'kategori_id';
    public function pelatihan()
    {
        return $this->belongsToMany(pelatihan::class, 'pelatihan_id');
    }
}
