<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class PopularController extends Controller
{
    public function index()
    {
        $popularPosts = Post::where('is_popular', true)->paginate(3); 
        return view('popular', compact('popularPosts'));
    }
}