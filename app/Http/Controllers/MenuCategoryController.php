<?php

namespace App\Http\Controllers;

use App\Models\MenuCategory;
use App\Http\Requests\StoreMenuCategoryRequest;
use App\Http\Requests\UpdateMenuCategoryRequest;

class MenuCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menuCategories = MenuCategory::all();
        return view('menuCategory', compact('menuCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menuCategoryAdd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMenuCategoryRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('menu_category_images', 'public');
            $data['image'] = $imagePath;
        }

        $menuCategory = MenuCategory::create($data);

        return redirect()->route('menuCategory.index')
            ->with('success', 'Menu category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(MenuCategory $menuCategory)
    {
        return view('menuCategoryshow', compact('menuCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MenuCategory $menuCategory)
    {
        // Your edit logic here
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMenuCategoryRequest $request, MenuCategory $menuCategory)
    {
        // Your update logic here
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MenuCategory $menuCategory)
    {
        // Your destroy logic here
    }
}
