<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ShoppingCart|null $cart
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Feedback> $feedback
 * @property-read int|null $feedback_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Orders> $orders
 * @property-read int|null $orders_count
 * @property-read \App\Models\UserProfile|null $profile
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Reviews> $reviews
 * @property-read int|null $reviews_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SupportTickets> $supportTicket
 * @property-read int|null $support_ticket_count
 * @property-read \App\Models\Wishlist|null $wishlist
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 * @mixin \Eloquent
 */
class User extends Model
{
    use HasFactory;

    public function profile()
    {
        return $this->hasOne(UserProfile::class);
    }

    public function cart()
    {
        return $this->hasOne(ShoppingCart::class);
    }

    public function orders()
    {
        return $this->hasMany(Orders::class);
    }

    public function wishlist()
    {
        return $this->hasOne(Wishlist::class);
    }

    public function reviews()
    {
        return $this->hasMany(Reviews::class);
    }

    public function supportTicket()
    {
        return $this->hasMany(SupportTickets::class);
    }

    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }
}
