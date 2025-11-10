<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latestPosts = Post::latest('published_at')->take(4)->get();
        return view('home', compact('latestPosts'));
    }
    public function showPost(Post $post)
    {
        return view('detail', ['post' => $post]);
    }
    public function about()
    {
        return view('about');
    }
}