<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    public function manage(string $id){

        $user = User::findOrfail($id);
        $status = $user->status === 'banned' ? 'active' : 'banned';
        $user->update(['status' => $status]);

        return back()->with('success', 'User status updqted successfully');

    }



    public function destroy(string $id)
    {
        $artisan = User::findOrFail($id);
        $artisan->destroy();
        return back()->with('success', 'User deleted successfully');
    }
}
