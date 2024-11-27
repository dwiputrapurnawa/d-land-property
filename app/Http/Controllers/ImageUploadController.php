<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    public function upload(Request $request)
    {
        // Validate the image
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        // Store the image in the 'public' disk (this can be changed based on your storage setup)
        $imagePath = $request->file('image')->store('images', 'public');

        // Respond with the URL of the stored image
        $imageUrl = Storage::url($imagePath);

        return response()->json([
            'success' => true,
            'url' => $imageUrl,
        ]);
    }
}
