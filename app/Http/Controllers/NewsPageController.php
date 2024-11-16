<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class NewsPageController extends Controller
{
    function index()
    {
        $company = Company::first();
        return view('news.index', ["company" => $company]);
    }
}
