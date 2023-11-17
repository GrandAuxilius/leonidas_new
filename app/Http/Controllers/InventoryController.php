<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

use App\Http\Requests\StoreinventoryRequest;
use App\Http\Requests\UpdateinventoryRequest;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventories = Inventory::all();

        return view('inventoryRestocking', compact('inventories'));


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
    public function store(StoreinventoryRequest $request)
    {
        $validatedData = $request->validated();
        Inventory::create($validatedData);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventory $inventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StoreinventoryRequest $request, Inventory $inventory)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreinventoryRequest $request, Inventory $inventory)
    {
        $validatedData = $request->validated();
        $inventory->update($validatedData);
        return redirect()->route('inventory.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventory $inventory)
    {
        //
    }
}
