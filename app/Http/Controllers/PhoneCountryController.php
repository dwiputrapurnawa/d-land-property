<?php

namespace App\Http\Controllers;

use App\Models\PhoneCountryCode;
use Illuminate\Http\Request;
use Exception;

class PhoneCountryController extends Controller
{

    private $view = [
        "country_code" => ["search_field" => "phone_country_code.country_code"],
        "country_name" => ["search_field" => "phone_country_code.country_name"],
        "phone_code" => ["search_field" => "phone_country_code.phone_code"],
    ];

    function get_phone_code(Request $request)
    {
        try {
            $query = $request->input('search');

            $phoneCode = new PhoneCountryCode();

            $data = $phoneCode->list_phone_code($this->view, $query);

            return response()->json($data, 200);
        } catch (Exception $e) {
            return response()->json(["error" => $e->getMessage()], 500);
        }
    }
}
