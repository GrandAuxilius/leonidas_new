<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MenuCategory;
use App\Http\Requests\UpdateMenuRequest;
use App\Http\Requests\StoreMenuRequest;
class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
  
        $menuList = Menu::all();
        $menuCategories = MenuCategory::all();
        return view('menu', compact('menuList', 'menuCategories'));

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menuCategories = MenuCategory::all();
        return view('menuAdd', compact('menuCategories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMenuRequest $request)
    {
 
        $validatedData = $request->validated();

        // Handle image upload
        $imagePath = $request->file('image')->store('menu', 'public');
    
        // Create Menu record
        $menu = new Menu();
        $menu->fill([
            'menuName' => $validatedData['menuName'],
            'menuCategory' => $validatedData['menuCategory'],
            'price' => $validatedData['price'],
            'menuStatus' => $validatedData['menuStatus'],
            'image' => $imagePath,
        ]);
    
        // Save the menu to the database
        $menu->save();
    
        // Redirect to the index page with a success message
        return redirect()->route('menu.index')->with('success', 'Menu added successfully');
    }




    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        return view('menuShow', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
       

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMenuRequest $request, Menu $menu)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
