<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Request as RequestModel;

class RequestController extends Controller
{

    public function chats(){
        $requests = RequestModel::where('client_id', auth()->id())
        ->orWhere('artisan_id', auth()->id())
        ->where('status', 'accepted')
        ->with(['artisan', 'client', 'messages'])
        ->get();

        dd($requests->toArray());

        return view('chat', compact('requests'));
    }

    public function showChat(string $id){
        $request = RequestModel::where('status', 'accepted')
        ->with(['artisan', 'client', 'messages'])
        ->where('client_id', auth()->id())
        ->orWhere('artisan_id', auth()->id())
        ->findOrFail($id);

        $requests = RequestModel::where('status', 'accepted')
        ->with(['artisan', 'client', 'messages'])
        ->where('client_id', auth()->id())
        ->orWhere('artisan_id', auth()->id())
        ->get();
        // dd($request->toArray());
        return view('selected-chat', compact('request', 'requests'));

    }

    public function store(Request $request, string $id)
    {
        // dd($request->all());
        User::where('role', 'artisan')->where('status', 'active')->findOrFail($id);
        $request->merge(['artisan_id' => $id]);
        $validated = $request->validate([
            'artisan_id' => 'required|int',
            'title' => 'required|string|max:255|min:2',
            'description' => 'required|string|max:255|min:10',
            'budget' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $validated['client_id'] = auth()->id();

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('requests', 'public');
        }

        RequestModel::create($validated);
        return back()->with('success', 'Request created successfully.');
    }

    public function refuse(string $id)
    {
        $requestModel = RequestModel::findOrFail($id);
        $requestModel->update([
            'status' => 'refused',
        ]);

        return back()->with('success', 'Request is refused successfully.');
    }

    public function approve(string $id)
    {
        if(auth()->user()->role !== 'artisan' || auth()->user()->artisanRequests()->where('id', $id)->count() === 0) {
            abort(403, 'Unauthorized action.');
        }

        $requestModel = RequestModel::findOrFail($id);
        $requestModel->update([
            'status' => 'accepted',
        ]);

        return back()->with('success', 'Request is approved successfully.');
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
