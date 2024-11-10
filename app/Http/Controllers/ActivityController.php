<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActivityController extends Controller
{
    private $view = [
        "nama" => ["search_field" => "users.name"],
        "activity" => ["search_field" => "activity.activity"],
        'date' => ["search_field" => "activity.created_at"]
    ];

    function activity_list(Request $request)
    {
        $start = $request->input("start");
        $length = $request->input("length");
        $query = $request->input('search')["value"];

        $activity = new Activity();

        $data = $activity->activity_list($start, $length, $query, $this->view);
        $totalData = $activity->activity_list_count_all();
        $totalFilteredData = $activity->activity_list_count_filter($start, $length, $query, $this->view);

        $no = $start + 1;

        foreach ($data as $value) {
            $value->no = $no;
            $no++;
        }

        return response()->json([
            'draw' => intval($request->draw),
            'recordsTotal' => $totalData,
            'recordsFiltered' => $totalFilteredData, // Optionally, you can use a filtered count here
            'data' => $data
        ]);
    }
}
