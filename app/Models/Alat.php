<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;

class Alat extends Model
{
    protected $fillable = ['nama','kategori_id','stok','kondisi'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}