<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class ErrorController extends Controller
{
    function error404()
    {
        $company = Company::first();
        return view('errors.404', ["company" => $company]);
    }
}
