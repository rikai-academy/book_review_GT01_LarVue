<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'image',
        'email',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function user_follow(){
        return $this->hasMany(Follow::class,'user_id');
    }

    public function user_are_follow(){
        return $this->hasMany(Follow::class,'follow_id');
    }

    public function activities(){
        return $this->hasMany(Activity::class,'user_id');
    }

    public function like_review(){
        return $this->hasMany(Like_Review::class,'user_id');
    }

    public function reviews(){
        return $this->hasMany(Review::class,'user_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class,'user_id');
    }

    public function like_comment(){
        return $this->hasMany(Like_Comment::class,'user_id');
    }
}
