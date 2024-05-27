<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSupportTicketsRequest;
use App\Http\Requests\UpdateSupportTicketsRequest;
use App\Models\SupportTickets;

class SupportTicketsController extends Controller
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
    public function store(StoreSupportTicketsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SupportTickets $supportTickets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SupportTickets $supportTickets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSupportTicketsRequest $request, SupportTickets $supportTickets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SupportTickets $supportTickets)
    {
        //
    }
}
