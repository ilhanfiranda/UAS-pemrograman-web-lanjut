<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;

    protected $table = "pembeli";

    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function obat()
    {
        return $this->hasMany(Obat::class, "pembeli_id");
    }
}