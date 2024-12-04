<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ImageUploadController extends Controller
{
    public function upload(Request $request)
    {
        // Validate the image
        $request->validate(
            [
                'image' => 'required|image|mimes:jpg,jpeg,png',
            ],
            [
                'image.required' => 'The image field is required.',
                'image.image' => 'The uploaded file must be an image.',
                'image.mimes' => 'The image must be a file of type: jpg, jpeg, png',
            ]
        );

        // Get the uploaded image
        $image = $request->file('image');

        // Create an instance of the image using Intervention Image
        $img = Image::make($image);

        // Compress the image (set quality to 75, you can adjust this)
        $img->encode('jpg', 75);

        // Generate a unique filename
        $filename = time() . '.jpg';

        // Store the compressed image in the 'projects' directory of the 'public' disk
        $img->save(storage_path('app/public/images/' . $filename));

        // Set the image path for database storage
        $imagePath = 'images/' . $filename;

        $imageUrl = Storage::url($imagePath);

        return response()->json([
            'success' => true,
            'url' => $imageUrl,
        ]);
    }
}
