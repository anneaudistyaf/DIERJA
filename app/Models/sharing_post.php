<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sharing_post extends Model
{
    use HasFactory;
    protected $table = 'sharing_posts';
    protected $primaryKey = 'sharing_id';
    protected $fillable = [
        'judul',
        'konten',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
