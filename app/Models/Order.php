<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Order extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    public $incrementing = false;
    protected $guarded = [];

    public function admin(){
        return $this->belongsTo(User::class,'id_admin');
    }
    public function user(){
        return $this->belongsTo(User::class,'id_user');
    }
}
