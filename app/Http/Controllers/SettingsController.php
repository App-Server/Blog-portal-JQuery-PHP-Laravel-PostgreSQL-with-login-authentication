<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        return view('settings.index');
    }

    public function create()
    {
        return view('settings.create');
    }

    public function store()
    {

    }

    public function show()
    {

    }
}
