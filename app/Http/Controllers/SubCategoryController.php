<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{

    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'name' => 'required|string|min:2|max:50',
            'category_id' => 'required|int|exists:categories,id',
        ]);

        SubCategory::create($validated);
        
        return back()->with('success', 'Sub category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $validated = $request->validate([
            'name' => 'required|string|min:2|max:50',
        ]);

        $subCategory = SubCategory::findOrFail($id);
        $subCategory->update($validated);

        return back()->with('success', 'Sub category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subCategory = SubCategory::findOrFail($id);
        $subCategory->delete();

        return back()->with('success', 'Sub category deleted successfully');
    }
}
