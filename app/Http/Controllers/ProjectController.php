<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Project;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{

    private $view = [
        "image" => ["search_field" => "project.image"],
        "title" => ["search_field" => "project.title"],
        'subtitle' => ["search_field" => "project.subtitle"],
        'roi' => ["search_field" => "project.roi"],
        'status' => ["search_field" => "project.status"],
    ];

    function index()
    {
        $user = Auth::user();
        return view('admin.project.index', ["user" => $user]);
    }

    function create()
    {
        $user = Auth::user();
        return view('admin.project.create', ["user" => $user]);
    }

    function insert(Request $request)
    {
        try {
            // Validate the form input
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'subtitle' => 'required|string|max:255',
                'description' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'roi' => "required",
                "status" => "required"
            ]);

            // Handle the image upload if there is an image
            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('projects', 'public');
            }

            // Insert data into the database
            Project::create([
                'title' => $validated['title'],
                'subtitle' => $validated['subtitle'],
                'description' => $validated['description'],
                'roi' => $validated['roi'],
                'status' => $validated['status'],
                'image' => $imagePath, // Store the image path in the database
            ]);

            return redirect()->route('admin.project.create');
        } catch (Exception $e) {
            return response(["status" => false, "message" => $e->getMessage()], 443);
        }
    }

    function update(Request $request, $id)
    {
        try {
            // Validate the form input
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'subtitle' => 'required|string|max:255',
                'description' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'roi' => "required",
                "status" => "required"
            ]);

            // Handle the image upload if there is an image
            $imagePath = $request->input('old_img_path');
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('projects', 'public');
            }

            // Insert data into the database
            Project::where("id", "=", $id)->update([
                'title' => $validated['title'],
                'subtitle' => $validated['subtitle'],
                'description' => $validated['description'],
                'roi' => $validated['roi'],
                'status' => $validated['status'],
                'image' => $imagePath, // Store the image path in the database
            ]);

            return redirect()->route('admin.project');
        } catch (Exception $e) {
            return response(["status" => false, "message" => $e->getMessage()], 443);
        }
    }

    function edit($slug)
    {
        $user = Auth::user();
        $project = Project::where('slug', '=', $slug)->first();
        return view('admin.project.edit', ["user" => $user, "project" => $project]);
    }

    function delete($id)
    {

        try {
            $project = Project::where('id', '=', $id)->first();

            $img_path = $project->image;
            if ($img_path != null) {
                Storage::disk('public')->delete($img_path);
            }

            $project->delete();


            return response(["status" => true, "message" => "Successfully deleted"], 200);
        } catch (Exception $e) {
            return response(["status" => false, "message" => $e->getMessage()], 422);
        }
    }

    function publish($id)
    {
        try {
            Project::where('id', '=', $id)->update(["status" => "publish"]);

            return response(["status" => true, "message" => "Successfully published"], 200);
        } catch (Exception $e) {
            return response(["status" => false, "message" => $e->getMessage()], 422);
        }
    }

    function project_list(Request $request)
    {
        $start = $request->input("start");
        $length = $request->input("length");
        $query = $request->input('search')["value"];

        $project = new Project();

        $data = $project->project_list($start, $length, $query, $this->view);
        $totalData = $project->project_list_count_all();
        $totalFilteredData = $project->project_list_count_filter($start, $length, $query, $this->view);

        $no = $start + 1;

        foreach ($data as $value) {
            $value->no = $no;
            $no++;
            $value->action = [
                "publish" => [
                    "url" => route('admin.project.publish', ["id" => $value->id]),
                    "label" => "Publish",
                    "visibility" => $value->status == "publish" ? "hidden" : "",
                ],
                "delete" => [
                    "url" => route('admin.project.delete', ["id" => $value->id]),
                    "label" => "Delete",
                ],
                "edit" => [
                    "url" => route('admin.project.edit', ["slug" => $value->slug]),
                    "label" => "Edit",
                ]
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
