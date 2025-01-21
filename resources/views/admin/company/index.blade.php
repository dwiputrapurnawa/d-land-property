@extends('layouts.panel')

@section('content')
    
   
<div class="bg-white p-20 rounded-lg shadow-lg w-full">
  <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Company Profile</h2>

  <form action="{{ route('admin.company.update', ['id' => $company->id]) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
    @csrf
    @method('PUT')
    <input type="hidden" name="old_img_path" value="{{ $company->logo }}">
      <!-- Image Upload -->
      <div class="flex flex-col max-w-lg">
        <label for="image" class="text-lg font-semibold text-gray-800 mb-2">Company Logo</label>
        <!-- Preview Container -->
       <div id="previewContainer" class="mb-10">
           <img id="previewImage" class="w-28 h-28 rounded-lg shadow-md lazy" alt="Preview" src="{{ $company->logo }}">
       </div>


           <div class="relative">
               <!-- Hidden file input -->
               <input type="file" id="image" name="image" class="absolute inset-0 opacity-0 cursor-pointer" />
               <!-- Custom file upload button -->
               <button class="file-upload-btn text-center bg-blue-600 text-white py-3 px-6 rounded-md hover:bg-indigo-600 transition duration-200 ease-in-out w-full">
                   Choose File
               </button>
           </div>
           <span id="file-name" class="mt-2 text-sm text-gray-500">No file chosen</span>
       </div>
    <!-- Company Name -->
    {{-- <div>
      <label class="block text-gray-700 font-semibold" for="name">Company Name</label>
      <input type="text" id="name" name="name" placeholder="Enter your company name"
        class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" value="{{ $company->name }}">
    </div> --}}

    <!-- Address -->
    <div>
      <label class="block text-gray-700 font-semibold" for="address">Address</label>
      <input type="text" id="address" name="address" placeholder="Company address"
        class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" value="{{ $company->address }}">
    </div>

    <!-- Phone -->
    <div>
      <label class="block text-gray-700 font-semibold" for="phone">Phone</label>
      <input type="tel" id="phone" name="phone" placeholder="Contact number"
        class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" value="{{ $company->phone }}">
    </div>

    <!-- Email -->
    <div>
      <label class="block text-gray-700 font-semibold" for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Email address"
        class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" value="{{ $company->email }}">
    </div>

    <!-- Instagram -->
    <div>
      <label class="block text-gray-700 font-semibold" for="instagram">Instagram</label>
      <input type="url" id="instagram" name="instagram" placeholder="Instagram profile URL"
        class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" value="{{ $company->instagram }}">
    </div>

    <!-- YouTube -->
    <div>
      <label class="block text-gray-700 font-semibold" for="youtube">YouTube</label>
      <input type="url" id="youtube" name="youtube" placeholder="YouTube channel URL"
        class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" value="{{ $company->youtube }}">
    </div>

    <!-- Facebook -->
    <div>
      <label class="block text-gray-700 font-semibold" for="facebook">Facebook</label>
      <input type="url" id="facebook" name="facebook" placeholder="Facebook page URL"
        class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" value="{{ $company->facebook }}">
    </div>

    <!-- Twitter -->
    <div>
      <label class="block text-gray-700 font-semibold" for="twitter">Twitter</label>
      <input type="url" id="twitter" name="twitter" placeholder="Twitter profile URL"
        class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" value="{{ $company->twitter }}">
    </div>

    <!-- Submit Button -->
    <div class="text-center">
      <button type="submit"
        class="px-6 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
        Submit
      </button>
    </div>
  </form>
</div>

@endsection