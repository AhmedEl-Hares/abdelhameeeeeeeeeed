<?php

namespace App\Http\Controllers;

use App\Models\Guides;
use App\Http\Requests\StoreGuidesRequest;
use App\Http\Requests\UpdateGuidesRequest;

class GuidesController extends Controller
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
    public function store(StoreGuidesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Guides $guides)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guides $guides)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuidesRequest $request, Guides $guides)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guides $guides)
    {
        //
    }
}
