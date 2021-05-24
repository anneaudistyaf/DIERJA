<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Laravel\Sanctum\HasApiTokens;

class company extends Authenticatable
{
    use HasApiTokens;
    use Notifiable;
    use HasFactory;
    protected $table = 'companies';
    protected $guard = 'company';
    protected $primaryKey = 'company_id';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    public function jobs()
    {
        return $this->hasMany(jobs::class);
    }
    public function ApplyLowongan()
    {
        return $this->hasMany(ApplyLowongan::class);
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
