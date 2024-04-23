<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama_pembeli' ,
        'nama_pesanan',
        'metode_pembayaran',
        'alamat',
        'jenis_pengiriman'
    ];

     public function scopeSelectedById($query, $id) {

        return $query->where('id', $id);

    }
    
}
