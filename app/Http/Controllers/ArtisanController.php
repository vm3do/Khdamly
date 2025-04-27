<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ArtisanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artisans = User::where('role', 'artisan')
        ->withAvg('reviews', 'rating')
        ->orderByDesc('reviews_avg_rating')
        ->with(['category'])->paginate(6);
        // dd($artisans->toArray());
        return view('artisans', compact('artisans'));
    }

    public function show(string $id)
    {
        $artisan = User::where('role', 'artisan')->findOrFail($id);
        $artisan->load(['category', 'reviews.client']);
        $artisan->loadAvg('reviews', 'rating');
        $artisan->loadCount('messages');

        return view('profile', compact('artisan'));
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
