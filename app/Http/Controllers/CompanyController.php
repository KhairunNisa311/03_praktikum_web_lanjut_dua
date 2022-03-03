<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return view('blog.content')
                    ->with('title', 'New Vision');
    }

    public function company()
    {
        return view('blog.company')
                    ->with('title', 'Our Company - New Vision');
    }

    public function services()
    {
        return view('blog.services')
                    ->with('title', 'Services - New Vision');
    }

    public function contact()
    {
        return view('blog.contact')
                    ->with('title', 'Contact - New Vision');
    }
}