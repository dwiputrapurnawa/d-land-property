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

        foreach ($projects as $item) {
            $item->dp_from =  formatNumber(floatval(str_replace(',', '', $item->dp_from)));
        }

        $company = Company::first();
        return view('projects.index', ["projects" => $projects, "company" => $company]);
    }

    function detail(Project $project)
    {

        $company = Company::first();

        $project->price_from =  formatNumber(floatval(str_replace(',', '', $project->price_from)));

        $chunks = array_chunk($project->amenities, ceil(count($project->amenities) / 2));

        $firstHalfAmenities = $chunks[0] ?? [];
        $secondHalfAmenities = $chunks[1] ?? [];

        $data = [
            "company" => $company,
            "project" => $project,
            "firstHalfAmenities" => $firstHalfAmenities,
            "secondHalfAmenities" => $secondHalfAmenities,
        ];

        return view('projects.detail', $data);
    }
}
