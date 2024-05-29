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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('watch_id');
            $table->integer('quantity');
            $table->decimal('price', 10, 2);
            $table->enum('status', ['pending', 'shipped', 'delievered']);
            $table->timestamps();

            // constraints
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('watch_id')->references('id')->on('watches');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
