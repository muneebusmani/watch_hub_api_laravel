<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
