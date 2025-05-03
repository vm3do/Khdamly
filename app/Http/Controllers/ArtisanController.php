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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $artisan = User::where('role', 'artisan')->findOrFail($id);
        $artisan->destroy();
        return back()->with('success', 'Artisan deleted successfully');
    }

    public function refuse(string $id)
    {
        $artisan = User::where('role', 'artisan')->findOrFail($id);
        $artisan->update(['status' => 'refused']);
        return back()->with('success', 'Artisan refused successfully');
    }

    public function approve(string $id)
    {
        $artisan = User::where('role', 'artisan')->findOrFail($id);
        $artisan->update(['status' => 'active']);
        return back()->with('success', 'Artisan accepted successfully');
    }

    public function dashboard()
    {
        $requests = auth()->user()->artisanRequests()->where('status', 'pending')->with(['client'])->paginate(5);
        // dd($requests->toArray());
        $requestsCount = $requests->count();
        return view('artisan.artisan-dashboard', compact('requests', 'requestsCount'));
    }

    public function pending()
    {
        if (auth()->user()->role !== 'artisan' || auth()->user()->status === 'approved') {
            return redirect()->route('homepage');
        }
        
        return view('pending');
    }

}
