<?php

namespace App\Models;

use App\Models\Orders;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'nama_sprei',
        'harga_sprei',
        'catatan',
        'bahan_sprei',
        'ukuran_sprei',  
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Orders::class, 'order_id', 'id');
    }

    public function scopeSelectedById($query, $id) {

        return $query->where('id', $id);

    }
}
