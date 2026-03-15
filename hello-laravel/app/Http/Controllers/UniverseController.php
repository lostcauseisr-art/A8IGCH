<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universe;

class UniverseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universe = Universe::all();
        return view('Universes.index', compact('universe'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Universes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        Universe::create([
            'universe' => $request->universe,
            'company' => $request->company,
            'edge' => $request->edge
        ]);
        return redirect()->route('universe.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
