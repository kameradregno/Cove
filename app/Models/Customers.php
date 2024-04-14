<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama' ,
        'telp',
        'alamat',
        'tipe_customer'
    ];

    public function scopeSelectedById($query, $id) {

        return $query->where('id', $id);


    }
}
