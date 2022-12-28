<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'foto',
        'kategori',
        'jumlah',
        'satuan',
    ];

    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategori', 'kategori');
    }

}
