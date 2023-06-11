<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use App\Models\tourney;
use Illuminate\Http\Request;

class TourneyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response('TourneyDecider');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(tourney $tourney)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tourney $tourney)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tourney $tourney)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tourney $tourney)
    {
        //
    }
}
