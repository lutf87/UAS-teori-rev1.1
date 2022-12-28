<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kategori',
        'foto_kategori',
        'kode_kategori',
    ];

    /**
     * Get all of the produk for the Kategori
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function produk()
    {
        return $this->hasMany(Produk::class, 'kategori_id');
    }

    // protected $guarded = 'id';

    // protected $table = 'kategoris';

    // protected $fillable = [
    //     'nama_kategori',
    //     'foto_kategori',
    //     'kode_kategori',
    // ];

}
