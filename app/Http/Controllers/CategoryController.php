<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::whereIn('slug', ['interactive-multimedia', 'software-engineering'])->get(); 
        return view('category', compact('categories'));
    }

    public function show(Category $category)
    {
        return view('detail_category', [
            'category' => $category,
            'posts' => $category->posts()->latest('published_at')->get() 
        ]);
    }
}