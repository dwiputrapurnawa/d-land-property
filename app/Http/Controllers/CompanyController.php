<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Company;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    function index()
    {

        $user = Auth::user();
        $company = Company::first();
        return view('admin.company.index', ["user" => $user, "company" => $company]);
    }


    function update(Request $request, $id)
    {
        try {
            // Validate the form input
            $validated = $request->validate([
                'address' => 'required|string',
                'phone' => 'required|string',
                'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'email' => "required",
                "instagram" => "nullable",
                "youtube" => "nullable",
                "facebook" => "nullable",
                "twitter" => "nullable",
            ]);

            // Handle the image upload if there is an image
            $imagePath = $request->input('old_img_path');
            if ($request->hasFile('logo')) {
                $imagePath = $request->file('logo')->store('company', 'public');
            }

            // Insert data into the database
            Company::where("id", "=", $id)->update([
                'address' => $validated['address'],
                'phone' => $validated['phone'],
                'logo' => $imagePath,
                'email' => $validated['email'],
                "instagram" => $validated['instagram'],
                "youtube" => $validated['youtube'],
                "facebook" => $validated['facebook'],
                "twitter" => $validated['twitter'],
            ]);

            return redirect()->route('admin.company')->with('success', 'Company updated successfully');
        } catch (Exception $e) {
            return response(["status" => false, "message" => $e->getMessage()], 443);
        }
    }
}
