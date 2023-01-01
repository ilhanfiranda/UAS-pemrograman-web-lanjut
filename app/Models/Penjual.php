<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    protected $table="penjual";

    public function obat()
    {
        return $this->belongsTo(Obat::class, "obat_id");
    }

    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }
}