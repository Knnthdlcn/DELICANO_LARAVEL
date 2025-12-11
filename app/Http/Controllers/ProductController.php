<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // Validate incoming request
        $validated = $request->validate([
            'search' => 'nullable|string|min:2|max:100',
            'category' => 'nullable|string|max:100',
            'page' => 'nullable|integer|min:1',
        ]);

        $query = Product::query();

        // Filter by category
        if ($request->filled('category')) {
            $query->where('category', $validated['category']);
        }

        // Filter by search
        if ($request->filled('search')) {
            $searchTerm = trim($validated['search']);
            $query->where(function ($q) use ($searchTerm) {
                $q->where('name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('description', 'like', '%' . $searchTerm . '%');
            });
        }

        $products = $query->orderBy('featured', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(50)
            ->withQueryString();
            
        $categories = Product::distinct('category')->pluck('category');

        return Inertia::render('Products/Index', [
            'products' => $products,
            'categories' => $categories,
            'filters' => [
                'category' => $request->category,
                'search' => $request->search,
            ],
        ]);
    }
}
