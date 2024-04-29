<?php

namespace App\Models;

use App\Models\Customers;
use App\Models\Items;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Orders extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'customer_id',
        'nama_pesanan',
        'metode_pembayaran',
        'alamat',
        'jenis_pengiriman'
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customers::class, 'customer_id', 'id');
    }

    public function customername()
    {
        return $this->belongsTo(Customers::class, 'customer_id', 'id');
    }

    public function items(): HasMany
    {
        return $this->hasMany(Items::class, 'order_id', 'id');
    }

    public function scopeSelectedById($query, $id) {

        return $query->where('id', $id);
    }
    
}
