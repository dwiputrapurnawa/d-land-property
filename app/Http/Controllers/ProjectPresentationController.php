<?php

namespace App\Http\Controllers;

use App\Models\ProjectPresentation;
use Exception;
use Illuminate\Http\Request;

class ProjectPresentationController extends Controller
{
    function store(Request $request)
    {
        try {
            $request->validate([
                'phone' => 'required',
            ]);

            ProjectPresentation::create($request->all());

            return response()->json(['status' => true, 'message' => 'Project Presentation request sent successfully'], 200);
        } catch (Exception $e) {
            return response()->json(['status' => false, 'message' => 'Project Presentation request failed'], 500);
        }
    }
}
