<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alum;

class AlumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Logic to fetch all alumni from the database
        $alum = Alum::all();
        return view('alum.index', ['alum' => $alum]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alum.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Logic to store new alumni data in the database
        Alum::create($request->all());
        return redirect()->route('alum.index')
            ->with('success', 'Alum created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Logic to fetch and display a specific alumni profile
        $alum = Alum::findOrFail($id);
        return view('alum.show', ['alum' => $alum]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Logic to fetch alumni data for editing
        $alum = Alum::findOrFail($id);
        return view('alum.edit', ['alum' => $alum]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Logic to update alumni data in the database
        $alum = Alum::findOrFail($id);
        $alum->update($request->all());
        return redirect()->route('alum.index')
            ->with('success', 'Alum updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Logic to delete alumni data from the database
        $alum = Alum::findOrFail($id);
        $alum->delete();
        return redirect()->route('alum.index')
            ->with('success', 'Alum deleted successfully');
    }
}
