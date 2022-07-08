<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    public function obats() {
        return $this->belongsToMany(Movie::class, 'kategori_obat', 'kategori_id', 'obat_id');
    }
}
