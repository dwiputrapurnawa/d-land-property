<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Image;
use App\Models\Project;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as InterventionImage;

class ProjectController extends Controller
{

    private $view = [
        "project_name" => ["search_field" => "project.project_name"],
        'status' => ["search_field" => "project.status"],
        'created_at' => ["search_field" => "project.created_at"],
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
        $validated = $request->validate([
            'project_name' => 'required',
            'property_type' => 'required',
            'location' => 'required',
            'price_from' => 'required',
            'quantity' => 'required',
            'capital_gain' => 'required',
            'rental_cash_flow' => 'required',
            'occupancy_rate' => 'required',
            'project_showcase_title' => 'required',
            'area' => 'required',
            'building_area' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'private_pool' => 'required',
            'carport' => 'required',
            'amenities' => 'required',
            'roads_time' => 'required',
            'roads_to' => 'required',
            'religion_time' => 'required',
            'religion_to' => 'required',
            'hotels_time' => 'required',
            'hotels_to' => 'required',
            'airports_time' => 'required',
            'airports_to' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            "status" => "required",
            "dp_from" => "required",
            "address" => "required",
            'images' => 'required|array|max:5', // Ensure at most 5 files
            'images.*' => 'image|mimes:jpg,jpeg,png,gif,svg,bmp|max:2048', // Validate each image
        ], [
            'project_name.required' => 'The project name is required.',
            'property_type.required' => 'The property type is required.',
            'location.required' => 'The location is required.',
            'price_from.required' => 'The price is required.',
            'quantity.required' => 'The quantity is required.',
            'capital_gain.required' => 'Capital gain is required.',
            'rental_cash_flow.required' => 'Rental cash flow is required.',
            'occupancy_rate.required' => 'The occupancy rate is required.',
            'project_showcase_title.required' => 'The project showcase title is required.',
            'area.required' => 'The area is required.',
            'building_area.required' => 'The building area is required.',
            'bedrooms.required' => 'The number of bedrooms is required.',
            'bathrooms.required' => 'The number of bathrooms is required.',
            'private_pool.required' => 'Private pool information is required.',
            'carport.required' => 'Carport information is required.',
            'amenities.required' => 'Amenities information is required.',
            'roads_time.required' => 'The roads travel time is required.',
            'roads_to.required' => 'The roads destination is required.',
            'religion_time.required' => 'The religion travel time is required.',
            'religion_to.required' => 'The religion destination is required.',
            'hotels_time.required' => 'The hotels travel time is required.',
            'hotels_to.required' => 'The hotels destination is required.',
            'airports_time.required' => 'The airports travel time is required.',
            'airports_to.required' => 'The airports destination is required.',
            'description.required' => 'The description is required.',
            'image.required' => 'An image is required.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg.',
            'image.max' => 'The image may not be greater than 2048 kilobytes.',
            'status.required' => 'The status field is required.',
            'dp_from.required' => 'Down payment information is required.',
            'address.required' => 'The address is required.',
            'images.required' => 'You must upload images.',
            'images.array' => 'The images must be an array.',
            'images.max' => 'You can upload up to 5 images.',
            'images.*.image' => 'Each image must be a valid image file.',
            'images.*.mimes' => 'Each image must be a file of type: jpg, jpeg, png, gif, svg, bmp.',
            'images.*.max' => 'Each image may not be greater than 2048 kilobytes.',
        ]);


        try {
            // Handle the image upload if there is an image
            $imagePath = null;
            if ($request->hasFile('image')) {
                // Get the uploaded image
                $image = $request->file('image');

                // Create an instance of the image using Intervention Image
                $img = InterventionImage::make($image);

                // Compress the image (set quality to 75, you can adjust this)
                $img->encode('webp', 75);

                // Generate a unique filename
                $filename = time() . '.webp';

                // Store the compressed image in the 'projects' directory of the 'public' disk
                $img->save(storage_path('app/public/projects/' . $filename));

                // Set the image path for database storage
                $imagePath = 'projects/' . $filename;
            }

            if ($validated["amenities"]) {
                $validated['amenities'] = explode(',', $validated['amenities']);
                $validated['amenities'] = array_map('trim', $validated['amenities']);
            }


            // Insert data into the database
            $project = Project::create([
                'project_name' => $validated['project_name'],
                'property_type' => $validated['property_type'],
                'location' => $validated['location'],
                'price_from' => $validated['price_from'],
                'quantity' => $validated['quantity'],
                'capital_gain' => $validated['capital_gain'],
                'rental_cash_flow' => $validated['rental_cash_flow'],
                'occupancy_rate' => $validated['occupancy_rate'],
                'project_showcase_title' => $validated['project_showcase_title'],
                'area' => $validated['area'],
                'building_area' => $validated['building_area'],
                'bedrooms' => $validated['bedrooms'],
                'bathrooms' => $validated['bathrooms'],
                'private_pool' => $validated['private_pool'],
                'carport' => $validated['carport'],
                'amenities' => $validated['amenities'],
                'roads_time' => $validated['roads_time'],
                'roads_to' => $validated['roads_to'],
                'religion_time' => $validated['religion_time'],
                'religion_to' => $validated['religion_to'],
                'hotels_time' => $validated['hotels_time'],
                'hotels_to' => $validated['hotels_to'],
                'airports_time' => $validated['airports_time'],
                'airports_to' => $validated['airports_to'],
                'description' => $validated['description'],
                'status' => $validated['status'],
                'dp_from' => $validated['dp_from'],
                'address' => $validated['address'],
                'image' => $imagePath, // Store the image path in the database
            ]);

            if ($request->hasFile('images')) {
                $images = $request->file('images');
                $filePaths = [];

                foreach ($images as $image) {
                    // Get original filename
                    $originalFilename = $image->getClientOriginalName();

                    // Create an instance of the image using Intervention Image
                    $img = InterventionImage::make($image);

                    // Compress the image (you can adjust the quality)
                    $img->encode('webp', 75); // Compress to 75% quality

                    // Generate a unique filename to avoid overwriting
                    $filename = time() . '_' . uniqid() . '.webp';

                    // Save the compressed image to the 'images' folder in public disk
                    $img->save(storage_path('app/public/images/' . $filename));

                    // Store the file path in the array
                    $filePaths[] = [
                        'path' => 'images/' . $filename,
                        'name' => $originalFilename
                    ];
                }

                // Save the file paths and other information to the database
                foreach ($filePaths as $file) {
                    Image::create([
                        'project_id' => $project->id,
                        'image_path' => $file['path'],
                        'image_name' => $file['name'], // Ensure the database table has a column for 'image_name'
                    ]);
                }
            }

            return redirect()->route('admin.project')->with("message", "Successfully added new product");
        } catch (Exception $e) {
            return redirect()->route('admin.project')->with("error", "Failed to add new product: " . $e->getMessage());
        }
    }

    function update(Request $request, $id)
    {

        $validated = $request->validate([
            'project_name' => 'required',
            'property_type' => 'required',
            'location' => 'required',
            'price_from' => 'required',
            'quantity' => 'required',
            'capital_gain' => 'required',
            'rental_cash_flow' => 'required',
            'occupancy_rate' => 'required',
            'project_showcase_title' => 'required',
            'area' => 'required',
            'building_area' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'private_pool' => 'required',
            'carport' => 'required',
            'amenities' => 'required',
            'roads_time' => 'required',
            'roads_to' => 'required',
            'religion_time' => 'required',
            'religion_to' => 'required',
            'hotels_time' => 'required',
            'hotels_to' => 'required',
            'airports_time' => 'required',
            'airports_to' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            "status" => "required",
            "dp_from" => "required",
            "address" => "required",
            'images' => 'nullable|array|max:5', // Ensure at most 5 files
            'images.*' => 'image|mimes:jpg,jpeg,png,gif,svg,bmp|max:2048', // Validate each image
        ], [
            'project_name.required' => 'The project name is required.',
            'property_type.required' => 'The property type is required.',
            'location.required' => 'The location is required.',
            'price_from.required' => 'The price from is required.',
            'quantity.required' => 'The quantity is required.',
            'capital_gain.required' => 'The capital gain is required.',
            'rental_cash_flow.required' => 'The rental cash flow is required.',
            'occupancy_rate.required' => 'The occupancy rate is required.',
            'project_showcase_title.required' => 'The project showcase title is required.',
            'area.required' => 'The area is required.',
            'building_area.required' => 'The building area is required.',
            'bedrooms.required' => 'The number of bedrooms is required.',
            'bathrooms.required' => 'The number of bathrooms is required.',
            'private_pool.required' => 'Private pool information is required.',
            'carport.required' => 'Carport information is required.',
            'amenities.required' => 'Amenities information is required.',
            'roads_time.required' => 'The roads time is required.',
            'roads_to.required' => 'The roads destination is required.',
            'religion_time.required' => 'The religion time is required.',
            'religion_to.required' => 'The religion destination is required.',
            'hotels_time.required' => 'The hotels time is required.',
            'hotels_to.required' => 'The hotels destination is required.',
            'airports_time.required' => 'The airports time is required.',
            'airports_to.required' => 'The airports destination is required.',
            'description.required' => 'The description is required.',
            'image.image' => 'The image must be an image file.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg.',
            'image.max' => 'The image may not be greater than 2048 kilobytes.',
            'status.required' => 'The status field is required.',
            'dp_from.required' => 'The down payment information is required.',
            'address.required' => 'The address is required.',
            'images.array' => 'The images field must be an array.',
            'images.max' => 'You can upload up to 5 images.',
            'images.*.image' => 'Each file in the images field must be an image.',
            'images.*.mimes' => 'Each image must be a file of type: jpg, jpeg, png, gif, svg, bmp.',
            'images.*.max' => 'Each image may not be greater than 2048 kilobytes.',
        ]);


        try {

            // Handle the image upload if there is an image
            $imagePath = $request->input('old_img_path');
            if ($request->hasFile('image')) {
                // Get the uploaded image
                $image = $request->file('image');

                // Create an instance of the image using Intervention Image
                $img = InterventionImage::make($image);

                // Compress the image (set quality to 75, you can adjust this)
                $img->encode('webp', 75);

                // Generate a unique filename
                $filename = time() . '.webp';

                // Store the compressed image in the 'projects' directory of the 'public' disk
                $img->save(storage_path('app/public/projects/' . $filename));

                // Set the image path for database storage
                $imagePath = 'projects/' . $filename;
            }

            if ($validated["amenities"]) {
                $validated['amenities'] = explode(',', $validated['amenities']);
                $validated['amenities'] = array_map('trim', $validated['amenities']);
            }



            $retained_images = json_decode($request->get('retained_images'), true);
            $retained_images_ids = [];

            if (is_array($retained_images)) {
                $retained_images_ids = array_map(function ($image) {
                    return $image['id'];
                }, $retained_images);
                $retained_images_ids = array_map('intval', $retained_images_ids); // Ensure IDs are integers
            }

            $existingImages = Image::where('project_id', $id)->pluck('id')->toArray();
            $imagesToDelete = array_diff($existingImages, $retained_images_ids);

            foreach ($imagesToDelete as $imageId) {
                // Fetch the image record
                $image = Image::where('id', $imageId)->where('project_id', $id)->first();
                if ($image) {
                    // Delete the file from storage
                    Storage::disk('public')->delete($image->image_path);

                    // Delete the record from the database
                    $image->delete();
                }
            }

            if ($request->hasFile('images')) {
                $images = $request->file('images');
                $filePaths = [];

                foreach ($images as $image) {
                    // Get original filename
                    $originalFilename = $image->getClientOriginalName();

                    // Create an instance of the image using Intervention Image
                    $img = InterventionImage::make($image);

                    // Compress the image (you can adjust the quality)
                    $img->encode('webp', 75); // Compress to 75% quality

                    // Generate a unique filename to avoid overwriting
                    $filename = time() . '_' . uniqid() . '.webp';

                    // Save the compressed image to the 'images' folder in public disk
                    $img->save(storage_path('app/public/images/' . $filename));

                    // Store the file path in the array
                    $filePaths[] = [
                        'path' => 'images/' . $filename,
                        'name' => $originalFilename
                    ];
                }

                // Save the file paths and other information to the database
                foreach ($filePaths as $file) {
                    Image::create([
                        'project_id' => $id,
                        'image_path' => $file['path'],
                        'image_name' => $file['name'], // Ensure the database table has a column for 'image_name'
                    ]);
                }
            }



            // Insert data into the database
            Project::where("id", "=", $id)->update([
                'project_name' => $validated['project_name'],
                'property_type' => $validated['property_type'],
                'location' => $validated['location'],
                'price_from' => $validated['price_from'],
                'quantity' => $validated['quantity'],
                'capital_gain' => $validated['capital_gain'],
                'rental_cash_flow' => $validated['rental_cash_flow'],
                'occupancy_rate' => $validated['occupancy_rate'],
                'project_showcase_title' => $validated['project_showcase_title'],
                'area' => $validated['area'],
                'building_area' => $validated['building_area'],
                'bedrooms' => $validated['bedrooms'],
                'bathrooms' => $validated['bathrooms'],
                'private_pool' => $validated['private_pool'],
                'carport' => $validated['carport'],
                'amenities' => $validated['amenities'],
                'roads_time' => $validated['roads_time'],
                'roads_to' => $validated['roads_to'],
                'religion_time' => $validated['religion_time'],
                'religion_to' => $validated['religion_to'],
                'hotels_time' => $validated['hotels_time'],
                'hotels_to' => $validated['hotels_to'],
                'airports_time' => $validated['airports_time'],
                'airports_to' => $validated['airports_to'],
                'description' => $validated['description'],
                'status' => $validated['status'],
                'dp_from' => $validated['dp_from'],
                'address' => $validated['address'],
                'image' => $imagePath, // Store the image path in the database
            ]);

            return redirect()->route('admin.project')->with("message", "Successfully updated the product");
        } catch (Exception $e) {
            return redirect()->route('admin.project')->with("error", "Failed to update the product: " . $e->getMessage());
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
            $images = $project->get_images;

            $img_path = $project->image;
            if ($img_path != null) {
                Storage::disk('public')->delete($img_path);
            }

            if ($images) {
                foreach ($images as $image) {
                    Storage::disk('public')->delete($image->image_path);
                    Image::where('id', '=', $image->id)->delete();
                }
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
