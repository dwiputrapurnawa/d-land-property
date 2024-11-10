<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $project = new Project();
        $projects = $project->project_publish_list();

        $company = Company::first();

        return view('home.index', ["projects" => $projects, "company" => $company]);
    }
}
