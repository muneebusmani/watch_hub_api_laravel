<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property int $watch_id
 * @property int $rating
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @property-read \App\Models\Watches $watch
 * @method static \Database\Factories\ReviewsFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Reviews newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reviews newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reviews query()
 * @method static \Illuminate\Database\Eloquent\Builder|Reviews whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reviews whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reviews whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reviews whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reviews whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reviews whereWatchId($value)
 * @mixin \Eloquent
 */
class Reviews extends Model
{
    use HasFactory;

    public function watch()
    {
        return $this->belongsTo(Watches::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
