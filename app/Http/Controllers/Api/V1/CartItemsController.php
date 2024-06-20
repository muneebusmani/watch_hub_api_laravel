<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCartItemsRequest;
use App\Http\Requests\UpdateCartItemsRequest;
use App\Http\Resources\CartItemsResource;
use App\Models\CartItems;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\JsonResponse as IlluminateJsonResponse;

class CartItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): AnonymousResourceCollection
    {
        return CartItemsResource::collection(CartItems::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCartItemsRequest $request): CartItemsResource
    {
        $cartitems = CartItems::create($request->validate());

        return CartItemsResource::make($cartitems);
    }

    /**
     * Display the specified resource.
     *
     * @return Model|Collection|CartItems|static[]
     */
    public function show(int $id): IlluminateJsonResponse
    {
        // Find the entry by ID
        $entry = CartItems::with('user_id')->find($id);

        // Check if the entry exists
        if (!$entry) {
            return response()->json(['message' => 'Entry not found'], 404);
        }

        // Return the entry as JSON
        return response()->json($entry);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CartItems $cartItems): void
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartItemsRequest $request, CartItems $cartItems): void
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CartItems $cartItems): void
    {
        //
    }
}
