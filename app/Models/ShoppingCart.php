<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\ShoppingCartFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingCart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingCart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingCart query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingCart whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingCart whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingCart whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingCart whereUserId($value)
 * @mixin \Eloquent
 */
class ShoppingCart extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
