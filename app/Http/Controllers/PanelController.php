<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PanelController extends Controller
{
    function index()
    {
        $user = Auth::user();
        return view('admin.panel.index', ['user' => $user]);
    }
}
