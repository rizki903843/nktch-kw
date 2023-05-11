<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        $user = Auth::user();

        $role = $user->userRole->role->name;

        if ($role == 'superadmin') {
            return view('admin.dashboard.index');
        }else {
            $products = Product::all();
            return view('fe_layout.app', compact('products'));
        }

    }


}
