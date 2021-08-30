<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['type'];

    /** Mapeamento payment 1:1 Order */
    public function order(){
        return $this->belongsTo('App\Order');
    }
}
