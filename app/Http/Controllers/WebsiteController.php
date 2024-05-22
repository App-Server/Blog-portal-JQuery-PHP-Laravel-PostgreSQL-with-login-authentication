<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class WebsiteController extends Controller
{
    public function index()
    {
        $websiteblog = Blog::paginate(10);
        return view('index', compact('websiteblog'));
    }

    public function show($id)
    {
        $blog = Blog::find($id);
        return view('details', compact('blog'));
    }
}
