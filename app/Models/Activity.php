<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Activity extends Model
{
    protected $table = "activity";
    protected $guarded = ["id"];



    function activity_list_count_all()
    {
        $count = DB::table('activity')
            ->leftJoin('users', 'activity.user_id', '=', 'users.id');

        return $count->count();
    }

    function activity_list_count_filter($start, $length, $query, $view)
    {
        $data = DB::table('activity')
            ->select('activity.*', 'users.name')
            ->leftJoin('users', 'activity.user_id', '=', 'users.id');

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

    function activity_list($start, $length, $query, $view)
    {

        $data = DB::table('activity')
            ->select('activity.*', 'users.name')
            ->leftJoin('users', 'activity.user_id', '=', 'users.id');

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
