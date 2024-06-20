<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreShoppingCartRequest;
use App\Http\Requests\UpdateShoppingCartRequest;
use App\Http\Resources\ShoppingCartResource;
use App\Models\ShoppingCart;
use Illuminate\Http\JsonResponse as IlluminateJsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ShoppingCartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): AnonymousResourceCollection
    {
        return ShoppingCartResource::collection(ShoppingCart::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreShoppingCartRequest $request): ShoppingCartResource
    {
        $shoppingCart = ShoppingCart::create($request->validate());
        return ShoppingCartResource::make($shoppingCart);
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(int $id): IlluminateJsonResponse
    {
        $entry = ShoppingCart::find($id);
        if (!$entry) {
            return response()->json(['message' => 'Entry not found'], 404);
        }
        return response()->json($entry);
    }

    /**
     * Show the form for editing the specified resource.
     * @return void
     */
    public function edit(ShoppingCart $shoppingCart): void
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @return void
     */
    public function update(UpdateShoppingCartRequest $request, ShoppingCart $shoppingCart): void
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @return void
     */
    public function destroy(ShoppingCart $shoppingCart): void
    {
        //
    }
}
