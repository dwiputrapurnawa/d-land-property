<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class AboutBaliPageController extends Controller
{
    function index()
    {
        $company = Company::first();
        return view('about_bali.index', ["company" => $company]);
    }
}
