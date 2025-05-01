<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ArtisanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function homepage()
    {
        $artisans = User::where('role', 'artisan')
            ->withAvg('artisanReviews as rating', 'rating')
            ->withCount('artisanReviews as reviews_count')
            ->orderByDesc('rating')
            ->with(['category'])->limit(3)->get();
        // dd($artisans->toArray());
        return view('homepage', compact('artisans'));
    }

    public function index()
    {
        $artisans = User::where('role', 'artisan')
            ->withAvg('artisanReviews as rating', 'rating')
            ->orderByDesc('rating')
            ->withCount('artisanReviews as reviews_count')
            ->with(['subCategory'])->paginate(6);
        // dd($artisans->toArray());
        return view('artisans', compact('artisans'));
    }

    public function show(string $id)
    {
        $artisan = User::where('role', 'artisan')->findOrFail($id);
        $artisan->load(['subCategory' , 'portfolio']);
        $artisan->loadAvg('artisanReviews as rating', 'rating');
        $artisan->loadCount('messages');

        // dd($artisan->toArray());
        $reviews = $artisan->artisanReviews()->with('client')->paginate(4);

        return view('profile', compact('artisan', 'reviews'));
    }

    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $artisan = User::where('role', 'artisan')->findOrFail($id);
        $artisan->destroy();
        return back()->with('success', 'Artisan deleted successfully');
    }

    public function portfolio(Request $request, string $id)
    {
        $artisan = User::where('role', 'artisan')->findOrFail($id);
        $artisan->load(['portfolio']);
        // dd($artisan->toArray());
        return response()->json([
            'portfolio' => $artisan->portfolio,
        ]);
    }
}
