<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Cviebrock\EloquentSluggable\Sluggable;

class News extends Model
{

    use Sluggable;

    protected $table = "news";
    protected $guarded = ["id"];


    /**
     * Get the options for generating the slug.
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true,  // Make sure slugs regenerate on update as well
                'unique' => true, // Make sure slugs are unique
            ]
        ];
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    function news_list_count_all()
    {
        $count = DB::table($this->table);

        return $count->count();
    }

    function news_list_count_filter($start, $length, $query, $view)
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

    function news_list($start, $length, $query, $view)
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

    function news_publish_list()
    {
        return DB::table($this->table)
            ->select($this->table . '.*')
            ->where('status', 'publish')
            ->orderBy('created_at', 'desc')
            ->get();
    }
}
