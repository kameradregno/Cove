<?php

namespace App\Models;

use App\Models\Orders;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'id',
        'nama' ,
        'telp',
        'alamat',
        'type'
    ];

    public function orders(): HasMany
    {
        return $this->hasMany(Orders::class, 'customer_id', 'id');
    }

    public function scopeSelectedById($query, $id) {

        return $query->where('id', $id);

    }
}
