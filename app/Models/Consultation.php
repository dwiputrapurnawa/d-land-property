<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Consultation extends Model
{
    protected $table = "consultation";
    protected $guarded = ["id"];

    function consultation_list_count_all()
    {
        $count = DB::table($this->table);

        return $count->count();
    }

    function consultation_list_count_filter($start, $length, $query, $view)
    {
        $data = DB::table($this->table)
            ->select($this->table . '.*');

        $data->where(function ($qry) use ($view, $query) {
            $qry->where(function ($subQry) use ($view, $query) {
                foreach ($view as $value) {
                    $subQry->orWhere($value['search_field'], 'like', '%' . $query . '%');
                }
            });
        });

        if ($length != null) {
            if ($length != -1) {
                $data
                    ->offset($start)
                    ->limit($length);
            }
        }

        return $data->count();
    }

    function consultation_list($start, $length, $query, $view)
    {

        $data = DB::table($this->table)
            ->select($this->table . '.*');

        $data->where(function ($qry) use ($view, $query) {
            $qry->where(function ($subQry) use ($view, $query) {
                foreach ($view as $value) {
                    $subQry->orWhere($value['search_field'], 'like', '%' . $query . '%');
                }
            });
        });

        if ($length != null) {
            if ($length != -1) {
                $data
                    ->offset($start)
                    ->limit($length);
            }
        }

        return $data->orderBy('created_at', 'desc')->get();
    }
}
