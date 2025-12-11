<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::where('featured', true)
            ->take(6)
            ->get();

        return Inertia::render('Home', [
            'featuredProducts' => $featuredProducts,
        ]);
    }
}
