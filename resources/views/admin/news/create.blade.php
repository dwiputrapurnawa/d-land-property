
@extends('layouts.panel')

@section('content')
    
    <div class="bg-white p-20 rounded-lg shadow-lg w-full">

        @if (session()->has("message"))
        <div class="max-w-md mb-12 mt-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg shadow message">
          <div class="flex items-center">
              <svg class="w-6 h-6 mr-2 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                  <path d="M9 12l2 2 4-4m0 0a9 9 0 11-5.64-8.36A9 9 0 0119.36 9H21"></path>
              </svg>
              <span class="font-semibold">Success!</span>
          </div>
          <p class="mt-2 text-sm">{{ session('message') }}</p>
      </div>
      @endif

      @if (session()->has("error"))
      <div class="max-w-md mb-12 mt-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg shadow message">
        <div class="flex items-center">
            <svg class="w-6 h-6 mr-2 fill-current text-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M9 12l2 2 4-4m0 0a9 9 0 11-5.64-8.36A9 9 0 0119.36 9H21"></path>
            </svg>
            <span class="font-semibold">Error!</span>
        </div>
        <p class="mt-2 text-sm">{{ session('error') }}</p>
    </div>
    @endif

        <h2 class="text-2xl font-semibold mb-6 text-gray-700">Create New Article</h2>
        <form action="{{ route('admin.news.insert') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <!-- Image Upload -->
            <div class="flex flex-col max-w-lg">

                <!-- Preview Container -->
               <div id="previewContainer" class="hidden mb-10">
                   <img id="previewImage" class="w-auto h-auto rounded-lg shadow-md" alt="Preview">
               </div>
   
                   <label for="image" class="text-lg font-semibold text-gray-800 mb-2">Upload Image</label>
                   <div class="relative">
                       <!-- Hidden file input -->
                       <input type="file" id="image" name="image" class="absolute inset-0 opacity-0 cursor-pointer" />
                       @error('image')
                         <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                       <!-- Custom file upload button -->
                       <button class="file-upload-btn text-center bg-blue-600 text-white py-3 px-6 rounded-md hover:bg-indigo-600 transition duration-200 ease-in-out w-full">
                           Choose File
                       </button>
                   </div>
                   
                   <div class="flex flex-row justify-between">
                    <span id="file-name" class="mt-2 text-sm text-gray-500">No file chosen</span>
                    <span class="mt-2 text-sm text-gray-500">Image max size: 2MB</span>
                   </div>
               </div>
            


            <!-- Title -->
            <div>
                <label for="title" class="block text-gray-700 font-medium">Title</label>
                <input type="text" id="title" name="title" placeholder="Enter title"
                       class="mt-1 p-3 block w-full border rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500" value="{{ old('title') }}">
                @error('title')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-cols-2 gap-8">
            
                <!-- Status (Draft or Publish) -->
                <div class="w-full self-end">
                    <label for="status" class="block text-gray-700 font-medium">Status</label>
                    <select id="status" name="status" class="mt-1 p-3 block w-full border rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                        <option value="publish" {{ old('status') == 'publish' ? 'selected' : '' }}>Publish</option>
                    </select>
                </div>
            </div>
            
            <div class="w-full">
                <input type="hidden" name="content" value="{{ old('content') }}">
            
                <label for="content" class="block text-gray-700 font-medium">Content</label>
                @error('content')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
                <div id="editor" class="w-full h-full">
                    {!! old('content') !!}
                </div>
            </div>

            


            <!-- Submit Button -->
            <div class="text-right">
                <button type="submit" class="px-6 py-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Submit
                </button>
            </div>
        </form>
    </div>


@endsection