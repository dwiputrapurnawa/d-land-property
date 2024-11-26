<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectPageController extends Controller
{
    function index()
    {
        $project = new Project();
        $projects = $project->project_publish_list();

        $company = Company::first();
        return view('projects.index', ["projects" => $projects, "company" => $company]);
    }

    function detail()
    {
        $company = Company::first();
        return view('projects.detail', ["company" => $company]);
    }
}
