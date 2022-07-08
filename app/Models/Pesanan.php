<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function Pembayarans(){
        return $this->belongsToMany(Pembayaran::class,'pembayaran_pesanan', 'pesanan_id', 'pembayaran_id');
    }
    public function pelunasan(){
        return $this->belongsTo(pelunasan::class);
    }
    public function Keranjang()
    {
        return $this->hasTo(pembayaran::class);
    }
}
