<?php

namespace App\Models;

use App\Models\Orders;
use App\Models\Items;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customers extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'id',
        'user_id',
        'nama' ,
        'telp',
        'alamat',
        'type'
    ];

    public function orders(): HasMany
    {
        return $this->hasMany(Orders::class, 'customer_id', 'id');
    }

    public function items(): HasMany
    {
        return $this->hasMany(Items::class, 'customer_id', 'id');
    }

    public function user(): HasMany
    {
        return $this->hasMany(Items::class, 'user_id', 'id');
    }
    
    public function scopeSelectedById($query, $id) {

        return $query->where('id', $id);
    }
}
