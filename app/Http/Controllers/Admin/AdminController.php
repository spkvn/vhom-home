<?php

namespace VhomHome\Http\Controllers\Admin;

use Illuminate\Http\Request;
use VhomHome\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
}
