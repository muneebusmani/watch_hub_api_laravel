<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishlistItems extends Model
{
    use HasFactory;
    public function wishlist()
    {
        return $this->belongsTo(Wishlist::class);
    }
}
