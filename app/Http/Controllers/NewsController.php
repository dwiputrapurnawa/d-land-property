<?php

namespace App\Http\Controllers;

use App\Models\News;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{

    private $view = [
        "title" => ["search_field" => "news.title"],
        'status' => ["search_field" => "news.status"],
        'created_at' => ["search_field" => "news.created_at"],
    ];

    function index()
    {
        $user = Auth::user();
        return view('admin.news.index', ["user" => $user]);
    }


    function create()
    {
        $user = Auth::user();
        return view('admin.news.create', ["user" => $user]);
    }

    function insert(Request $request)
    {
        // Validate the form input
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            "status" => "required"
        ]);

        // Handle the image upload if there is an image
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('news', 'public');
        }

        // Insert data into the database
        News::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'status' => $validated['status'],
            'image' => $imagePath, // Store the image path in the database
        ]);

        return redirect()->route('admin.news.create');
    }

    function update(Request $request, $id)
    {

        // Validate the form input
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            "status" => "required"
        ]);

        // Handle the image upload if there is an image
        $imagePath = $request->input('old_img_path');
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('news', 'public');
        }

        // Insert data into the database
        News::where("id", "=", $id)->update([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'status' => $validated['status'],
            'image' => $imagePath, // Store the image path in the database
        ]);

        return redirect()->route('admin.news');
    }

    function edit($slug)
    {
        $user = Auth::user();
        $news = News::where('slug', '=', $slug)->first();
        return view('admin.news.edit', ["user" => $user, "news" => $news]);
    }

    function delete($id)
    {

        try {
            $news = News::where('id', '=', $id)->first();

            $img_path = $news->image;
            if ($img_path != null) {
                Storage::disk('public')->delete($img_path);
            }

            $news->delete();


            return response(["status" => true, "message" => "Successfully deleted"], 200);
        } catch (Exception $e) {
            return response(["status" => false, "message" => $e->getMessage()], 422);
        }
    }

    function publish($id)
    {
        try {
            News::where('id', '=', $id)->update(["status" => "publish"]);

            return response(["status" => true, "message" => "Successfully published"], 200);
        } catch (Exception $e) {
            return response(["status" => false, "message" => $e->getMessage()], 422);
        }
    }

    function news_list(Request $request)
    {
        $start = $request->input("start");
        $length = $request->input("length");
        $query = $request->input('search')["value"];

        $news = new News();

        $data = $news->news_list($start, $length, $query, $this->view);
        $totalData = $news->news_list_count_all();
        $totalFilteredData = $news->news_list_count_filter($start, $length, $query, $this->view);

        $no = $start + 1;

        foreach ($data as $value) {
            $value->no = $no;
            $no++;
            $value->action = [
                "publish" => [
                    "url" => route('admin.news.publish', ["id" => $value->id]),
                    "label" => "Publish",
                    "visibility" => $value->status == "publish" ? "hidden" : "",
                ],
                "delete" => [
                    "url" => route('admin.news.delete', ["id" => $value->id]),
                    "label" => "Delete",
                ],
                "edit" => [
                    "url" => route('admin.news.edit', ["slug" => $value->slug]),
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
