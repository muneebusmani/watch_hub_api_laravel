<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
