<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $guarded = [];

    public function creator(){
        return $this->belongsTo(User::class,'id_creator');
    }
}
