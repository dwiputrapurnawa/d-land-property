<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Project;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    function index()
    {
        $company = Company::first();
        return view('about_us.index', ["company" => $company]);
    }
}
