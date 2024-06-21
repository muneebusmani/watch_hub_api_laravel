<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 *
 *
 * @property int $id
 * @property int $cart_id
 * @property int $watch_id
 * @property string $price
 * @property int $quantity
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ShoppingCart $cart
 * @property-read \App\Models\Watches|null $product
 * @method static \Database\Factories\CartItemsFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|CartItems newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CartItems newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CartItems query()
 * @method static \Illuminate\Database\Eloquent\Builder|CartItems whereCartId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItems whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItems whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItems wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItems whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItems whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItems whereWatchId($value)
 * @mixin \Eloquent
 */
class CartItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'cart_id',
        'watch_id',
        'price',
        'quantity',
        'cart',
        'product'
    ];

    public function cart()
    {
        return $this->belongsTo(ShoppingCart::class);
    }

    public function product()

    {
        return $this->belongsTo(Watches::class);
    }
    /*
        The CartItems class is a Laravel Eloquent model representing an item in a shopping cart.
        It uses the HasFactory trait for model factories and defines mass-assignable attributes with $fillable.
        It has two relationships: it belongs to a ShoppingCart via the cart method and belongs to a Watches model
        via the product method.
    */
}
