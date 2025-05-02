<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $categories = Category::all();
        $categories->load(['subCategories']);

        $pendings = User::where('status', 'pending')->with(['subCategory', 'portfolio'])->paginate(5);
        $totalPendings = $pendings->count();
        $users = User::where('role', '!=', 'admin')->with(['subCategory', 'portfolio'])->paginate(5);

        $totalUsers = User::count();
        
        return view('dashboard', compact('categories', 'pendings', 'users', 'totalPendings', 'totalUsers'));
    }
}
