<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempOrder extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $guarded = [];

    public function product(){
        return $this->belongsTo(Product::class,'id_product');
    }
}
