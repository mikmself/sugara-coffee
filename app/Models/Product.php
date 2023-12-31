<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(ProductCategory::class,'id_category');
    }
    public function tempOrder(){
        return $this->hasMany(TempOrder::class,'id_product');
    }
}
