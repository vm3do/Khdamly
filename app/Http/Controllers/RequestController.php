<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Request as RequestModel;

class RequestController extends Controller
{
    public function store(Request $request, string $id)
    {
        // dd($request->all());
        $validated = $request->validate([
            'artisan_id' => 'required|exists:users,id',
            'description' => 'required|string|max:255|min:10',
            'budget' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $validated['client_id'] = auth()->id;

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('requests', 'public');
        }

        $request = RequestModel::create($validated);
        return back()->with('success', 'Request created successfully.');
    }

    public function show(string $id)
    {
        
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
