<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property string $subject
 * @property string $message
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\SupportTicketsFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTickets newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTickets newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTickets query()
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTickets whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTickets whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTickets whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTickets whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTickets whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTickets whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTickets whereUserId($value)
 * @mixin \Eloquent
 */
class SupportTickets extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
