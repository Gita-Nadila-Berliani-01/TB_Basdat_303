<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function orders(){
        return $this->belongsToMany(order::class, 'pembayaran_pesanan', 'pembayaran_id', 'pesanan_id');
    }
}
