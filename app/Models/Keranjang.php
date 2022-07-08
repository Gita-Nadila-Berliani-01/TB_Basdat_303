<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;

    public function orders(){
        return $this->belongsToMany(order::class, 'order_id');
    }
    public function obat(){
        return $this->belongsToMany(obat::class, 'obat_id');
    }
}
