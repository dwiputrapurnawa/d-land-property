<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Exception;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{

    private $view = [
        "name" => ["search_field" => "consultation.name"],
        'email' => ["search_field" => "consultation.email"],
        'phone' => ["search_field" => "consultation.phone"],
        'messenger' => ["search_field" => "consultation.messenger"],
        'created_at' => ["search_field" => "consultation.created_at"],
    ];

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

    function consultations_list(Request $request)
    {
        $start = $request->input("start");
        $length = $request->input("length");
        $query = $request->input('search')["value"];

        $consultation = new Consultation();

        $data = $consultation->consultation_list($start, $length, $query, $this->view);
        $totalData = $consultation->consultation_list_count_all();
        $totalFilteredData = $consultation->consultation_list_count_filter($start, $length, $query, $this->view);

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
