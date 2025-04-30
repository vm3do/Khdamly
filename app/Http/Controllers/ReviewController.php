<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request, string $id)
    {
        // dd($request->all());
        $artisan = User::where('role', 'artisan')->where('is_blocked', false)->findOrFail($id);
        $request->merge(['artisan_id' => $id]);

        $validated = $request->validate([
            'artisan_id' => 'required|int',
            'rating' => 'required|numeric|min:1|max:5',
            'comment' => 'required|string|max:255',
        ]);

        $validated['client_id'] = auth()->id;

        Review::create($validated);
        return back()->with('success', 'Review created successfully.');
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
