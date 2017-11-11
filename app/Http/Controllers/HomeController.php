<?php

namespace VhomHome\Http\Controllers;

use Illuminate\Http\Request;
use VhomHome\Models\Project;
class HomeController extends Controller
{
   /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('site.home')
            ->with('projects', $projects);
    }
}
