
@extends('layouts.panel')

@section('content')
    
    <div class="bg-white p-20 rounded-lg shadow-lg w-full">
        <h2 class="text-2xl font-semibold mb-6 text-gray-700">Create New Article</h2>
        <form action="{{ route('admin.news.update', ['id' => $news->id]) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')
            <!-- Image Upload -->
            <div class="flex flex-col max-w-lg">

                <input type="hidden" name="old_img_path" value="{{ $news->image }}">

                <!-- Preview Container -->
               <div id="previewContainer" class="mb-10">
                   <img id="previewImage" class="w-auto h-auto rounded-lg shadow-md" alt="Preview" src="{{ asset($news->image) }}">
               </div>
   
                   <label for="image" class="text-lg font-semibold text-gray-800 mb-2">Upload Image</label>
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
            


            <!-- Title -->
            <div>
                <label for="title" class="block text-gray-700 font-medium">Title</label>
                <input type="text" id="title" name="title" placeholder="Enter title"
                       class="mt-1 p-3 block w-full border rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500" value="{{ $news->title }}">
                    @error('title')
                       <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                   @enderror
            </div>

            <div class="flex flex-cols-2 gap-8">
            
                <!-- Status (Draft or Publish) -->
                <div class="w-full self-end">
                    <label for="status" class="block text-gray-700 font-medium">Status</label>
                    <select id="status" name="status" class="mt-1 p-3 block w-full border rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="draft" {{ $news->status == "draft" ? "selected" : "" }}>Draft</option>
                        <option value="publish" {{ $news->status == "publish" ? "selected" : "" }}>Publish</option>
                    </select>
                </div>
            </div>
            
            <input type="hidden" name="content" value="{{ $news->content }}">
            <label for="content" class="block text-gray-700 font-medium">Content</label>
            @error('content')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror

            <div id="editor">
                {!! $news->content !!}
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