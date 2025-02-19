<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProdukDetail extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'sma_products';

    /**
     * Get the user that owns the Produk
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function relSatuan(): BelongsTo
    {
        return $this->belongsTo(Satuan::class, 'unit', 'id');
    }
}
