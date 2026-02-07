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
            ->orderBy('priority', 'asc')
            ->orderBy('name', 'asc')
            ->take(10) // Limit to 10 categories for the slider
            ->get();

        return view('userInterface.app', compact('categories'));
    }
    
}
