<?php

namespace App\Http\Controllers;

use App\Models\ProjectPresentation;
use Exception;
use Illuminate\Http\Request;

class ProjectPresentationController extends Controller
{

    private $view = [
        'phone' => ["search_field" => "project_presentation.phone"],
        'created_at' => ["search_field" => "project_presentation.created_at"],
    ];

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

    function project_presentation_list(Request $request)
    {
        $start = $request->input("start");
        $length = $request->input("length");
        $query = $request->input('search')["value"];

        $project_presentation = new ProjectPresentation();

        $data = $project_presentation->project_presentations_list($start, $length, $query, $this->view);
        $totalData = $project_presentation->project_presentations_list_count_all();
        $totalFilteredData = $project_presentation->project_presentations_list_count_filter($start, $length, $query, $this->view);

        $no = $start + 1;

        foreach ($data as $value) {
            $value->no = $no;
            $no++;
            $value->action = [
                "url" => "https://wa.me/" . cleanPhoneNumber($value->phone),
                "label" => "Send Message",
            ];
        }

        return response()->json([
            'draw' => intval($request->draw),
            'recordsTotal' => $totalData,
            'recordsFiltered' => $totalFilteredData, // Optionally, you can use a filtered count here
            'data' => $data
        ]);
    }
}
