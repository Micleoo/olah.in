<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $table = 'keranjang';
    protected $fillable = [
        'id_user',
        'id_produk',
        'jumlah',
    ];

    // Relasi ke model produk
    public function product()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }

        // Relasi ke model User (jika diperlukan)
        public function user()
        {
            return $this->belongsTo(User::class, 'id_user');
        }
    
}
