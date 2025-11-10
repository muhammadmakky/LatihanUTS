<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function index()
    {
        $writers = Writer::all();
        return view('writers', compact('writers'));
    }
    public function show(Writer $writer)
    {
        return view('detail_writer', [
            'writer' => $writer,
            'posts' => $writer->posts()->latest('published_at')->get()
        ]);
    }
}