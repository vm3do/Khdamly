<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    /**
     * Update the specified resource in storage.
     */
    public function updateInfo(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:2|max:50',
            'email' => 'required|email|max:255',
            'city' => 'required|string|min:3|max:255',
            'bio' => 'nullable|string|max:255',
        ]);

        $user = User::findOrFail($id);
        $user->update($validated);

        return back()->with('success', 'User informations updated successfully');
    }

    public function updatePassword(Request $request, string $id)
    {
        // dd($request->all());
        $validated = $request->validate([
            'current_password' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::findOrFail($id);

        if (!Hash::check($validated['current_password'], $user->password)) {
            return back()->with('error', 'Old password is incorrect');
        }

        $user->update(['password' => Hash::make($validated['password'])]);

        return back()->with('success', 'User password updated successfully');
    }

    public function manage(string $id){

        $user = User::findOrfail($id);
        $status = $user->status === 'banned' ? 'active' : 'banned';
        $user->update(['status' => $status]);

        return back()->with('success', 'User status updqted successfully');

    }

    public function updateProfile(Request $request, string $id){

        if ($id != auth()->id()) {
            abort(403);
        }
        $user = User::findOrFail($id);
        $validated = $request->validate([
            'profile_pic' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if($request->hasFile('profile_pic')){
            $path = $request->file('profile_pic')->store('profiles', 'public');
            $user->update(['profile_pic' => $path]);
            return back()->with('success', 'Profile pic updated successfully');
        }

        return back()->with('error', 'Error updating your profile, Try again');
    }



    public function destroy(string $id)
    {
        $artisan = User::findOrFail($id);
        $artisan->destroy();
        return back()->with('success', 'User deleted successfully');
    }
}
