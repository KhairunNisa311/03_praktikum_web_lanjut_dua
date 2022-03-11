<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $all_service = post::all();
        
        return view('blog.services', ['blog' => $all_service])
                    ->with('title', 'services - New Vision');
    }
}
