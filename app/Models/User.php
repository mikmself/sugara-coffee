<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'level',
        'address',
        'telephone',
    ];
    public $incrementing = false;
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function order(){
        return $this->hasMany(Order::class,'id_admin');
    }
    public function orderUser(){
        return $this->hasMany(Order::class,'id_user');
    }
    public function post(){
        return $this->hasMany(Post::class,'id_creator');
    }

}
