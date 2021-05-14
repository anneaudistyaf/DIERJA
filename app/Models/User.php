<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $primarykey = 'id';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    public function address()
    {
        return $this->hasOne(address::class);
    }
    public function cv()
    {
        return $this->hasOne(cv::class);
    }
    public function sharing_post()
    {
        return $this->hasOne(sharing_post::class);
    }
    public function comment()
    {
        return $this->hasOne(comment::class);
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
