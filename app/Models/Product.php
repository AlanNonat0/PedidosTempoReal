<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'image', 'sales'];

    /** Mapeamento Product N:N order_products */
    public function order() {
        return $this->belongsToMany('App\Order', 'order_products', 'product_id', 'order_id');
    }
}
