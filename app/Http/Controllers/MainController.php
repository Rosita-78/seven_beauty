<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Categories;
use App\Models\Products;


class MainController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        $Products = Products::all();
        return view('home', compact('categories', 'Products'));
    }
}
