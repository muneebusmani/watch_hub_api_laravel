<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('wishlist_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('wishlist_id');
            $table->unsignedBigInteger('watch_id');
            $table->timestamps();

            $table->foreign('wishlist_id')->references('id')->on('wishlists');
            $table->foreign('watch_id')->references('id')->on('watches');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wishlist_items');
    }
};
