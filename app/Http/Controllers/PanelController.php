<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;
use App\Models\News;
use App\Models\ProjectPresentation;

class PanelController extends Controller
{
    function index()
    {
        $user = Auth::user();

        $total_projects = Project::count();
        $total_news = News::count();
        $total_consultations = Consultation::count();
        $total_project_presentations = ProjectPresentation::count();

        $data = [
            "user" => $user,
            "total_projects" => $total_projects,
            "total_news" => $total_news,
            "total_consultations" => $total_consultations,
            "total_project_presentations" => $total_project_presentations,
        ];

        return view('admin.panel.index', $data);
    }
}
