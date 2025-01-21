<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    /** @use HasFactory<\Database\Factories\ProductsFactory> */
    use HasFactory;

    protected $table = 'product';

    protected $fillable = [
        'name',
        'harga',
        'kategori',
        'gambar',
        'jumlah_dipesan',
    ];
}
