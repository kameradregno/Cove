<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama' ,
        'telp',
        'alamat',
        'type'
    ];

    public function scopeSelectedById($query, $id) {

        return $query->where('id', $id);


    }
}
