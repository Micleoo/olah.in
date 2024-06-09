<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{

    protected $table = 'produk';

    
    protected $fillable = [
        'nama_produk',
        'foto_produk',
        'deskripsi',
        'harga',
        'jumlah_terjual',
        'id_user',
    ];


    

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function keranjang()
    {
    return $this->hasMany(keranjang::class);
    }

}