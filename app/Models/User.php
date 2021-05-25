<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'email',
        'password',
        'date_of_birth',
        'gender',
        'disabilitas',
        'user_profile',
        'location',

    ];
    public function address()
    {
        return $this->hasOne(address::class);
    }
    public function cv()
    {
        return $this->hasOne(cv::class, 'cv_id');
    }
    public function sharing_post()
    {
        return $this->hasMany(sharing_post::class);
    }
    public function comment()
    {
        return $this->hasOne(comment::class);
    }
    public function apply()
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
