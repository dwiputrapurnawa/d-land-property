<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Project;
use Illuminate\Http\Request;

class ManagementPageController extends Controller
{
    function index()
    {
        $company = Company::first();
        return view('management.index', ["company" => $company]);
    }
}
