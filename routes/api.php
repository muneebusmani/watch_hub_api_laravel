<?php

use App\Http\Controllers\Api\V1\CartItemsController;
use App\Http\Controllers\Api\V1\CategoriesController;
use App\Http\Controllers\Api\V1\ShoppingCartController;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\UserProfileController;
use App\Http\Controllers\Api\V1\WishlistController;
use App\Http\Controllers\Api\V1\WishlistItemsController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(
    function () {
        Route::apiResource('user/', UserController::class);
        Route::apiResource('user_profiles/', UserProfileController::class);
        Route::apiResource('categories/', CategoriesController::class);
        Route::apiResource('shopping_cart/', ShoppingCartController::class);
        Route::apiResource('cart_items/', CartItemsController::class);
        Route::apiResource('wishlist/', WishlistController::class);
        Route::apiResource('wishlist_items/', WishlistItemsController::class);
    }
);
