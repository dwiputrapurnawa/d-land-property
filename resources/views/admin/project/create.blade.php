
@extends('layouts.panel')

@section('content')
    
    <div class="bg-white p-20 rounded-lg shadow-lg w-full">
        <h2 class="text-2xl font-semibold mb-6 text-gray-700">Create New Project</h2>
        <form action="{{ route('admin.project.insert') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
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
                       class="mt-1 p-3 block w-full border rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
            </div>

            <!-- Subtitle -->
            <div>
                <label for="subtitle" class="block text-gray-700 font-medium">Subtitle</label>
                <input type="text" id="subtitle" name="subtitle" placeholder="Enter subtitle"
                       class="mt-1 p-3 block w-full border rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
            </div>

            <div class="flex flex-cols-2 gap-8">
                <!-- ROI -->
                <div class="w-full self-end">
                    <label for="roi" class="block text-gray-700 font-medium">ROI (%)</label>
                    <input type="number" id="roi" name="roi" placeholder="Enter ROI" min="0" step="0.01"
                           class="mt-1 p-3 block w-full border rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                </div>
            
                <!-- Status (Draft or Publish) -->
                <div class="w-full self-end">
                    <label for="status" class="block text-gray-700 font-medium">Status</label>
                    <select id="status" name="status" class="mt-1 p-3 block w-full border rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="draft">Draft</option>
                        <option value="publish">Publish</option>
                    </select>
                </div>
            </div>
            

            <!-- Description with Trix Editor -->
            <div>
                <label for="description" class="block text-gray-700 font-medium">Description</label>
                <input id="description" type="hidden" name="description">
                <trix-editor input="description" class="trix-content mt-1 border rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500 h-48"></trix-editor>
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