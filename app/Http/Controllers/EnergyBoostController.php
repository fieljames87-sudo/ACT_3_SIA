<?php

namespace App\Http\Controllers;

use App\Models\EnergyBoost;
use Illuminate\Http\Request;

class EnergyBoostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $energy = \App\Models\EnergyBoost::all();
        return view('energy.index', compact('energy'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('energy.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        \App\Models\EnergyBoost::create($request->all());
        return redirect()->route('energy.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $item = \App\Models\EnergyBoost::findOrFail($id);
        return view('energy.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = \App\Models\EnergyBoost::findOrFail($id);
        return view('energy.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $item = \App\Models\EnergyBoost::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('energy.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $item = \App\Models\EnergyBoost::findOrFail($id);
    $item->delete();

    return redirect()->route('energy.index');
}
}
