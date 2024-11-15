<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Exception;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'messenger' => 'required',
            ]);

            Consultation::create($request->all());

            return response()->json(['status' => true, 'message' => 'Consultation request sent successfully'], 200);
        } catch (Exception $e) {
            return response()->json(['status' => false, 'message' => 'Consultation request failed'], 500);
        }
    }
}
