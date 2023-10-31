<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $guarded = [];

    public function admin(){
        return $this->belongsTo(User::class,'id_admin');
    }
    public function product(){
        return $this->belongsTo(Product::class,'id_product');
    }
}
