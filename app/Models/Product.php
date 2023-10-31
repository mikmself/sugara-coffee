<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $guarded = [];

    public function order(){
        return $this->hasMany(Order::class,'id_product');
    }
    public function category(){
        return $this->belongsTo(ProductCategory::class,'id_category');
    }
}
