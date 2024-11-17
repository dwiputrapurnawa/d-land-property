<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PhoneCountryCode extends Model
{
    protected $table = "phone_country_code";
    protected $guarded = ["id"];

    function list_phone_code($view, $query)
    {

        try {
            $data = DB::table('phone_country_code')
                ->select('phone_country_code.*');

            $data->where(function ($qry) use ($view, $query) {
                $qry->where(function ($subQry) use ($view, $query) {
                    foreach ($view as $value) {
                        $subQry->orWhere($value['search_field'], 'like', '%' . $query . '%');
                    }
                });
            });

            return $data->orderBy('country_name', 'asc')->limit(5)->get();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
