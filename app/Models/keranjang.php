<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class keranjang extends Model
{
    protected $table = 'produk';
    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
    ];

    // Relasi ke model produk
    public function product()
    {
        return $this->belongsTo(Produk::class, 'product_id');
    }
}
