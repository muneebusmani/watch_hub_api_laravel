<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class CartItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'cart_id',
        'watch_id',
        'price',
        'quantity',
    ];

    public function cart()
    {
        return $this->belongsTo(ShoppingCart::class);
    }

    public function product()

    {
        return $this->belongsTo(Watches::class);
    }
}
