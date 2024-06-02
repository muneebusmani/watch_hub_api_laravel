<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int $order_id
 * @property int $watch_id
 * @property int $quantity
 * @property string $price
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Orders $order
 * @method static \Database\Factories\OrderItemsFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItems newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItems newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItems query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItems whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItems whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItems whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItems wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItems whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItems whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItems whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItems whereWatchId($value)
 * @mixin \Eloquent
 */
class OrderItems extends Model
{
    use HasFactory;

    public function order()
    {
        return $this->belongsTo(Orders::class);
    }
}
