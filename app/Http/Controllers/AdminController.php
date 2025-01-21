<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Products;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $countCategories = Categories::count();
        $countProducts = Products::count();
        $countOrder = Order::count();
        $countUser = User::where('role', 'user')->count();
        return view('admin.index', compact('countCategories', 'countProducts', 'countOrder', 'countUser'));
    }
}
