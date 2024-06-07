<?php

use App\Http\Controllers\Api\V1\CartItemsController;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\UserProfileController;
use App\Http\Controllers\Api\V1\WishlistController;
use App\Http\Controllers\Api\V1\WishlistItemsController;
use App\Models\ShoppingCart;
// use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('users/', UserController::class);
    Route::apiResource('user_profiles/', UserProfileController::class);
    Route::apiResource('shopping_carts/', ShoppingCart::class);
    Route::apiResource('cart_items/', CartItemsController::class);
    // Route::get('cart_items/{cartItem}', [CartItemsController::class, 'show']);
    Route::apiResource('wishlists/', WishlistController::class);
    Route::apiResource('wishlist_items/', WishlistItemsController::class);
    // http http://localhost/api/v1/{routename}
});

// Route::get('/user', function (Request $request) {
// })->middleware('auth:sanctum');
// Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers'], function () {
//     Route::apiResource('userprofiles', UserProfileController::class);
//     // return $request->user();
// });
// Route::get('//', [UserController::class, 'show']);
