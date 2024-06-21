<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderItemsRequest;
use App\Http\Requests\UpdateOrderItemsRequest;
use App\Models\OrderItems;

class OrderItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderItemsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        // Find the entry by ID
        $entry = OrderItems::find($id);

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
    public function edit(OrderItems $orderItems)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderItemsRequest $request, OrderItems $orderItems)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderItems $orderItems)
    {
        //
    }
}
