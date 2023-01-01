<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    protected $table = "obat";

    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class, "pembeli_id");
    }

    public function penjual()
    {
        return $this->hasMany(Penjual::class, "obat_id");
    }

    public function kategori()
    {
        return $this->belongsToMany(Kategori::class, "kategori_obat", "obat_id", "kategori_id");
    }
}
