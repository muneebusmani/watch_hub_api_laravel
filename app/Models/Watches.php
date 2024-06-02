<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $brand
 * @property string $model
 * @property string $description
 * @property string $price
 * @property int $stock
 * @property int $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Categories $category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Images> $images
 * @property-read int|null $images_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Reviews> $reviews
 * @property-read int|null $reviews_count
 * @method static \Database\Factories\WatchesFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Watches newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Watches newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Watches query()
 * @method static \Illuminate\Database\Eloquent\Builder|Watches whereBrand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Watches whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Watches whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Watches whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Watches whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Watches whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Watches wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Watches whereStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Watches whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Watches extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }

    public function images()
    {
        return $this->hasMany(Images::class);
    }

    public function reviews()
    {
        return $this->hasMany(Reviews::class);
    }
}
