<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    protected $table = "kategori";

    public function obat()
    {
        return $this->belongsToMany(Obat::class, "kategori_obat", "kategori_id", "obat_id");
    }
}
