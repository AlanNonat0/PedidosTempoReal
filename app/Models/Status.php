<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = ['status'];

    /** Mapeamento Status 1:1 Order */
    public function order(){
        return $this->belongsTo('App\Order');
    }
}
