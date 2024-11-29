<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Project extends Model
{
    use Sluggable;
    protected $table = "project";
    protected $guarded = ["id"];

    protected $casts = [
        'amenities' => 'array', // Cast JSON column to array
    ];

    /**
     * Get the options for generating the slug.
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'project_name',
                'onUpdate' => true,  // Make sure slugs regenerate on update as well
                'unique' => true, // Make sure slugs are unique
            ]
        ];
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function get_images()
    {
        return $this->hasMany(Image::class, "project_id", "id");
    }

    function project_list_count_all()
    {
        $count = DB::table('project');

        return $count->count();
    }

    function project_list_count_filter($start, $length, $query, $view)
    {
        $data = DB::table('project')
            ->select('project.*');

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

    function project_list($start, $length, $query, $view)
    {

        $data = DB::table('project')
            ->select('project.*');

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

    function project_publish_list()
    {
        return DB::table('project')
            ->select('project.*')
            ->where('status', 'publish')
            ->orderBy('created_at', 'desc')
            ->get();
    }
}
