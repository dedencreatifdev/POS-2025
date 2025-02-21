<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class Produk extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'sma_products';
    // protected $table = 'sma_warehouses_products';

    /**
     * Get the user that owns the Produk
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function relProdukDetail(): BelongsTo
    {
        return $this->belongsTo(ProdukDetail::class, 'product_id', 'id');
    }
}
