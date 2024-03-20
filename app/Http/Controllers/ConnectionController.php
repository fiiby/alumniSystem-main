<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Connection;

class ConnectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Logic to fetch all connections from the database
        $connections = Connection::all();
        return view('connections.index', ['connections' => $connections]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('connections.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Logic to store new connection data in the database
        Connection::create($request->all());
        return redirect()->route('connections.index')
            ->with('success', 'Connection created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Connection $connection)
    {
        // Logic to fetch and display a specific connection
        return view('connections.show', ['connection' => $connection]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Connection $connection)
    {
        // Logic to fetch connection data for editing
        return view('connections.edit', ['connection' => $connection]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Connection $connection)
    {
        // Logic to update connection data in the database
        $connection->update($request->all());
        return redirect()->route('connections.index')
            ->with('success', 'Connection updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Connection $connection)
    {
        // Logic to delete connection data from the database
        $connection->delete();
        return redirect()->route('connections.index')
            ->with('success', 'Connection deleted successfully');
    }
}
