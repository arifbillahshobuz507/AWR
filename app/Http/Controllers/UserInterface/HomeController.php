<?php

namespace App\Http\Controllers\UserInterface;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Category;

class HomeController extends Controller
{
    //home
public function home()
    {
        // Fetch only root categories (no parent) for the homepage
        $categories = Category::whereNull('parent_id')
        ->withCount('products') // Load product count
        ->orderBy('priority', 'asc')
        ->orderBy('name', 'asc')
        ->take(10)
        ->get();

    return view('userInterface.app', compact('categories'));
        return view('userInterface.app', compact('categories'));
    }
    public function categoryProducts($id)
{
    $category = Category::with(['products', 'children'])->findOrFail($id);
    
    return view('userInterface.category-products', compact('category'));
}
    
}
