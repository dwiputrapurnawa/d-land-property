<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $projectObj = new Project();
        $projects = $projectObj->project_publish_list();

        $project = Project::latest()->first();

        $company = Company::first();

        foreach ($projects as $item) {
            $item->dp_from =  formatNumber(floatval(str_replace(',', '', $item->dp_from)));
        }

        $data = [
            "company" => $company,
            "projects" => $projects,
            "project" => $project
        ];

        return view('home.index', $data);
    }
}
