<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWatchesRequest;
use App\Http\Requests\UpdateWatchesRequest;
use App\Models\Watches;

class WatchesController extends Controller
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
    public function store(StoreWatchesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        // Find the entry by ID
        $entry = Watches::find($id);

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
    public function edit(Watches $watches)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWatchesRequest $request, Watches $watches)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Watches $watches)
    {
        //
    }
}
