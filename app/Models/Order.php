<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['client_name', 'Note', 'payment', 'amount', 'status'];

    /** Mapeamento Order 1:1 status */
    public function status()
    {
        return $this->hasOne('App\Status');
    }

    /** Mapeamento order 1:1 Payments */
    public function payment()
    {
        return $this->hasOne('App\Payment');
    }

    /** Mapeamento Order N:N order_products */
    public function products()
    {
        return $this->belongsToMany(
            'App\Models\Product',
            'order_products',
            'order_id',
            'product_id'

        )->withPivot(
            'id',
            'quantity',
            'created_at',
            'updated_at'
        );
    }
}
