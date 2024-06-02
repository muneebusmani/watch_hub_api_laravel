<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int $wishlist_id
 * @property int $watch_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Wishlist $wishlist
 * @method static \Database\Factories\WishlistItemsFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|WishlistItems newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WishlistItems newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WishlistItems query()
 * @method static \Illuminate\Database\Eloquent\Builder|WishlistItems whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WishlistItems whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WishlistItems whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WishlistItems whereWatchId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WishlistItems whereWishlistId($value)
 * @mixin \Eloquent
 */
class WishlistItems extends Model
{
    use HasFactory;
    public function wishlist()
    {
        return $this->belongsTo(Wishlist::class);
    }
}
