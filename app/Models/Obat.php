<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    public function kategoris() {
        return $this->belongsToMany(Kategori::class, 'kategori_obat', 'obat_id', 'kategori_id');
    }
}
