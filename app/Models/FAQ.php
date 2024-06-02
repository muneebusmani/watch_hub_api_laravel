<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $question
 * @property string $answer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\FAQFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|FAQ newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FAQ newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FAQ query()
 * @method static \Illuminate\Database\Eloquent\Builder|FAQ whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FAQ whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FAQ whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FAQ whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FAQ whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class FAQ extends Model
{
    use HasFactory;
}
