
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

        <h2 class="text-2xl font-semibold mb-12 text-gray-700">Create New Project</h2>
        <form id="project-form" action="{{ route('admin.project.insert') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <!-- Image Upload -->
            <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col max-w-lg mt-auto">
                    <label for="image" class="text-lg font-semibold text-gray-800 mb-2">Upload Cover Image</label>
                    <!-- Preview Container -->
                   <div id="previewContainer" class="hidden mb-10">
                       <img id="previewImage" class="w-auto h-auto rounded-lg shadow-md lazy" alt="Preview">
                   </div>
       
               
                       <div class="relative">
                           <!-- Hidden file input -->
                           <input type="file" id="image" name="image" class="absolute inset-0 opacity-0 cursor-pointer" />
                           <!-- Custom file upload button -->
                           <button class="file-upload-btn text-center bg-blue-600 text-white py-3 px-6 rounded-md hover:bg-indigo-600 transition duration-200 ease-in-out w-full">
                               Choose Image
                           </button>
                            @error('image')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                       </div>
                       <div class="flex flex-row justify-between">
                        <span id="file-name" class="mt-2 text-sm text-gray-500">No file chosen</span>
                        <span class="mt-2 text-sm text-gray-500">Image max size: 2MB</span>
                       </div>
                   </div>
    
                   <div class="max-w-3xl mx-auto bg-white">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Upload Project Images</h2>
                    
                    
                    
                    <!-- Custom Styled File Input -->
                    <label for="imageInput" class="inline-block mb-4 cursor-pointer bg-blue-600 text-white py-3 px-6 rounded-md hover:bg-blue-700 transition duration-200 text-center">
                        Select Images
                    </label>

                    <span class="flex flex-col mt-2 text-sm text-gray-500">Image max size: 2MB</span>
                    
                    @error('images')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
                    <input type="file" id="imageInput" name="images[]" multiple class="hidden">
                    
                    <div class="flex flex-wrap gap-6 justify-start mb-6" id="previewContainerImages"></div>
            
                    <!-- Message Display -->
                    <div id="uploadLimitMessage" class="text-red-600 mt-4 hidden">You can only upload up to 5 images.</div>
                </div>
            </div>
            <hr>
            
            <!-- Project Name -->
            <div class="mb-4">
                <label for="project_name" class="block text-gray-700 font-medium">Project Name</label>
                <input type="text" id="project_name" name="project_name" placeholder="Enter Project Name" value="{{ old('project_name') }}"
                    class="mt-1 p-3 block w-full border rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                    <span class="text-sm text-gray-500 mt-1 block px-4">e.g Mumbul Villa</span>
                    @error('project_name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <!-- Property Type -->
            <div class="mb-4">
                <label for="property_type" class="block text-gray-700 font-medium">Property Type</label>
                <input type="text" id="property_type" name="property_type" placeholder="Enter property type" value="{{ old('property_type') }}"
                    class="mt-1 p-3 block w-full border rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                    <span class="text-sm text-gray-500 mt-1 block px-4">e.g Villa</span>
                    @error('property_type')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Location -->
            <div class="mb-4">
                <label for="location" class="block text-gray-700 font-medium">Location</label>
                <input type="text" id="location" name="location" placeholder="Enter location" value="{{ old('location') }}"
                    class="mt-1 p-3 block w-full border rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                    <span class="text-sm text-gray-500 mt-1 block px-4">e.g Nusa Dua, Bali</span>
                    @error('location')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <!-- Address -->
            <div class="mb-4">
                <label for="address" class="block text-gray-700 font-medium">Address</label>
                <input type="text" id="address" name="address" placeholder="Enter Address" value="{{ old('address') }}"
                    class="mt-1 p-3 block w-full border rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                    <span class="text-sm text-gray-500 mt-1 block px-4">e.g Jalan Raya Kampus Udayana No. 18x Jimbaran, Kuta Selatan, Badung 80361</span>
                    @error('address')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-cols-2 gap-4">
                <!-- Price From -->
                <div class="mb-4 relative w-full">
                    <label for="price_from" class="block text-gray-700 font-medium">Price From</label>
                    <div class="mt-1 flex items-center">
                        <span class="absolute left-2 text-gray-500">Rp.</span>
                        <input type="text" id="price_from" name="price_from" placeholder="0.00" value="{{ old('price_from') }}"
                            class="p-3 pl-12 block w-full border rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500 price-input">
                    </div>
                    @error('price_from')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
                </div>
                <div class="mb-4 relative w-full">
                    <label for="dp_from" class="block text-gray-700 font-medium">Down Payment From</label>
                    <div class="mt-1 flex items-center">
                        <span class="absolute left-2 text-gray-500">Rp.</span>
                        <input type="text" id="dp_from" name="dp_from" placeholder="0.00" value="{{ old('dp_from') }}"
                            class="p-3 pl-12 block w-full border rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500 price-input">
                    </div>
                    @error('dp_from')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
                </div>

                <div class="self-end mb-4 w-full">
                    <label for="quantity" class="block text-gray-700 font-medium">Quantity</label>
                    <input type="number" id="quantity" name="quantity" placeholder="Enter quantity of property" min="0" value="{{ old('quantity') }}"
                           class="mt-1 p-3 block w-full border rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">

                           @error('quantity')
                           <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                       @enderror
                </div>
            </div>

            <div class="flex flex-cols-3 gap-4">
                <div class="self-end mb-4 w-full">
                    <label for="capital_gain" class="block text-gray-700 font-medium">Capital Gain (%)</label>
                    <input type="number" id="capital_gain" name="capital_gain" placeholder="Enter Capital Gain" min="0" value="{{ old('capital_gain') }}"
                           class="mt-1 p-3 block w-full border rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                           @error('capital_gain')
                           <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                       @enderror
                </div>
                <div class="self-end mb-4 w-full">
                    <label for="rental_cash_flow" class="block text-gray-700 font-medium">Rental Cash Flow (%)</label>
                    <input type="number" id="rental_cash_flow" name="rental_cash_flow" placeholder="Enter Rental Cash Flow" min="0" value="{{ old('rental_cash_flow') }}"
                           class="mt-1 p-3 block w-full border rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                           @error('rental_cash_flow')
                           <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                       @enderror
                </div>
                <div class="self-end mb-4 w-full">
                    <label for="occupancy_rate" class="block text-gray-700 font-medium">Occupancy Rate (%)</label>
                    <input type="number" id="occupancy_rate" name="occupancy_rate" placeholder="Enter Occupancy Rate" min="0" value="{{ old('occupancy_rate') }}"
                           class="mt-1 p-3 block w-full border rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                           @error('occupancy_rate')
                           <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                       @enderror
                </div>
            </div>


              <!-- Project Showcase Title -->
              <div class="mb-4">
                <label for="project_showcase_title" class="block text-gray-700 font-medium">Project Showcase Title</label>
                <input type="text" id="project_showcase_title" name="project_showcase_title" placeholder="Enter Project Showcase Title" value="{{ old('project_showcase_title') }}"
                    class="mt-1 p-3 block w-full border rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                    <span class="text-sm text-gray-500 mt-1 block px-4">e.g D'Land Villa Mumbul Nusa Dua — Designed by Balinese Architect that combines Modern Tropical Living with Natural Stone Balinese touches.</span>
                    @error('project_showcase_title')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

          
             <!-- Description -->
             <div class="mb-4">
                <label for="description-editor" class="block text-gray-700 font-medium mb-4">Description</label>
                <input type="hidden" name="description" value="{{ old('description') }}">
                @error('description')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
                <div id="description-editor" style="height: 300px">
                    {!! old('description') !!}
                </div>
            </div>
            <div class="flex gap-4 mb-4">
                <!-- Area Input with Suffix -->
                <div class="self-end w-full relative">
                    <label for="area" class="block text-gray-700 font-medium">Area</label>
                    <div class="mt-1 flex items-center">
                        <input type="number" id="area" name="area" placeholder="Enter Area" min="0" value="{{ old('area') }}"
                            class="p-3 pr-12 block w-full border rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                        <span class="absolute right-3 text-gray-500">m²</span>
                    </div>
                    @error('area')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
                </div>
            
                <!-- Building Area Input with Suffix -->
                <div class="self-end w-full relative">
                    <label for="building_area" class="block text-gray-700 font-medium">Building Area</label>
                    <div class="mt-1 flex items-center">
                        <input type="number" id="building_area" name="building_area" placeholder="Enter Building Area" min="0" value="{{ old('building_area') }}"
                            class="p-3 pr-12 block w-full border rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                        <span class="absolute right-3 text-gray-500">m²</span>
                    </div>
                    @error('building_area')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
                </div>
            </div>


            <div class="flex flex-cols-3 gap-4">
                <div class="self-end mb-4 w-full">
                    <label for="bedrooms" class="block text-gray-700 font-medium">Bedrooms</label>
                    <input type="number" id="bedrooms" name="bedrooms" placeholder="Enter Bedrooms" min="0" value="{{ old('bedrooms') }}"
                           class="mt-1 p-3 block w-full border rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                           @error('bedrooms')
                           <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                       @enderror
                </div>
                <div class="self-end mb-4 w-full">
                    <label for="bathrooms" class="block text-gray-700 font-medium">Bathrooms</label>
                    <input type="number" id="bathrooms" name="bathrooms" placeholder="Enter Bathrooms" min="0" value="{{ old('bathrooms') }}"
                           class="mt-1 p-3 block w-full border rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                           @error('bathrooms')
                           <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                       @enderror
                </div>
                <div class="self-end mb-4 w-full">
                    <label for="private_pool" class="block text-gray-700 font-medium">Private Pool</label>
                    <select id="private_pool" name="private_pool" class="mt-1 p-3 block w-full border rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="1" {{ old('private_pool') == '1' ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ old('private_pool') == '0' ? 'selected' : '' }}>No</option>
                    </select>
                           @error('private_pool')
                           <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                       @enderror
                </div>
                <div class="self-end mb-4 w-full">
                    <label for="carport" class="block text-gray-700 font-medium">Carport</label>
                    <select id="carport" name="carport" class="mt-1 p-3 block w-full border rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="1" {{ old('carport') == '1' ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ old('carport') == '0' ? 'selected' : '' }}>No</option>
                    </select>
                           @error('carport')
                           <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                       @enderror
                </div>
            </div>

            <label for="">Amenities</label>
            <div id="chip-container" class="flex flex-wrap border border-gray-300 rounded p-2">
                <!-- Chips will be appended here -->
                  
                <input
                  id="chip-input"
                  type="text"
                  placeholder="Type and press Enter"
                  class="outline-none flex-grow px-2 py-1"
                />
                <input type="hidden" name="amenities" id="hidden-tags" value="{{ old('amenities') }}" />
              </div>
              @error('amenities')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
          @enderror
              
              <hr>
              
            
            <div class="py-12">
            <label for="convenient_accessibility" class="text-3xl">Convenient Access to Key Landmarks and Amenities</label>
            
            <div class="mb-4 mt-8 pl-8" id="convenient_accessibility">
                <div class="mb-4">
                    <label for="roads" class="block text-gray-700 font-medium text-xl mb-2">Roads</label>
                    <div class="flex flex-cols-2 gap-4 pl-4" id="roads">
                        <div class="self-end w-full relative">
                            <label for="roads_time" class="block text-gray-700 font-medium">Travel Time</label>
                            <div class="mt-1 flex items-center">
                                <input type="number" id="roads_time" name="roads_time" placeholder="Enter Travel Time" min="0" value="{{ old('roads_time') }}"
                                    class="p-3 pr-12 block w-full border rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                                <span class="absolute right-3 text-gray-500">min</span>
                            </div>
                            @error('roads_time')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                            <br>
                        </div>
                
                        <div class="w-full">
                            <label for="roads_to" class="block text-gray-700 font-medium">Destination</label>
                            <input type="text" id="roads_to" name="roads_to" placeholder="Enter Destination" value="{{ old('roads_to') }}"
                                class="mt-1 p-3 block w-full border rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                                <span class="text-sm text-gray-500 mt-1 block px-4">e.g Bali Mandara Toll Road</span>
                                @error('roads_to')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
    
                <div class="mb-4">
                    <label for="religion" class="block text-gray-700 font-medium text-xl mb-2">Religion</label>
                    <div class="flex flex-cols-2 gap-4 pl-4" id="religion">
                        <div class="self-end w-full relative">
                            <label for="religion_time" class="block text-gray-700 font-medium">Travel Time</label>
                            <div class="mt-1 flex items-center">
                                <input type="number" id="religion_time" name="religion_time" placeholder="Enter Travel Time" min="0" value="{{ old('religion_time') }}"
                                    class="p-3 pr-12 block w-full border rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                                <span class="absolute right-3 text-gray-500">min</span>
                            </div>
                            @error('religion_time')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                            <br>
                        </div>
                
                        <div class="w-full">
                            <label for="religion_to" class="block text-gray-700 font-medium">Destination</label>
                            <input type="text" id="religion_to" name="religion_to" placeholder="Enter Destination" value="{{ old('religion_to') }}"
                                class="mt-1 p-3 block w-full border rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                                <span class="text-sm text-gray-500 mt-1 block px-4">e.g Puja Mandala Worship Complex</span>
                                @error('religion_to')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
    
                <div class="mb-4">
                    <label for="hotels" class="block text-gray-700 font-medium text-xl mb-2">Hotels</label>
                    <div class="flex flex-cols-2 gap-4 pl-4" id="hotels">
                        <div class="self-end w-full relative">
                            <label for="hotels_time" class="block text-gray-700 font-medium">Travel Time</label>
                            <div class="mt-1 flex items-center">
                                <input type="number" id="hotels_time" name="hotels_time" placeholder="Enter Travel Time" min="0" value="{{ old('hotels_time') }}"
                                    class="p-3 pr-12 block w-full border rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                                <span class="absolute right-3 text-gray-500">min</span>
                            </div>
                            @error('hotels_time')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                            <br>
                        </div>
                
                        <div class="w-full">
                            <label for="hotels_to" class="block text-gray-700 font-medium">Destination</label>
                            <input type="text" id="hotels_to" name="hotels_to" placeholder="Enter Destination" value="{{ old('hotels_to') }}"
                                class="mt-1 p-3 block w-full border rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                                <span class="text-sm text-gray-500 mt-1 block px-4">e.g Apurva Kempinski</span>
                                @error('hotels_to')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
    
                <div class="mb-4">
                    <label for="airports" class="block text-gray-700 font-medium text-xl mb-2">Airports</label>
                    <div class="flex flex-cols-2 gap-4 pl-4" id="airports">
                        <div class="self-end w-full relative">
                            <label for="airports_time" class="block text-gray-700 font-medium">Travel Time</label>
                            <div class="mt-1 flex items-center">
                                <input type="number" id="airports_time" name="airports_time" placeholder="Enter Travel Time" min="0" value="{{ old('airports_time') }}"
                                    class="p-3 pr-12 block w-full border rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                                <span class="absolute right-3 text-gray-500">min</span>
                            </div>
                            @error('airports_time')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                            <br>
                        </div>
                
                        <div class="w-full">
                            <label for="airports_to" class="block text-gray-700 font-medium">Destination</label>
                            <input type="text" id="airports_to" name="airports_to" placeholder="Enter Destination" value="{{ old('airports_to') }}"
                                class="mt-1 p-3 block w-full border rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                                <span class="text-sm text-gray-500 mt-1 block px-4">e.g Ngurah Rai Airport</span>
                                @error('airports_to')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            </div>
            

            <hr>
        
            
                <!-- Status (Draft or Publish) -->
                <div class="w-full self-end">
                    <label for="status" class="block text-gray-700 font-medium">Status</label>
                    <select id="status" name="status" class="mt-1 p-3 block w-full border rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                        <option value="publish" {{ old('status') == 'publish' ? 'selected' : '' }}>Publish</option>
                    </select>
                    @error('status')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
                </div>
                


                 <!-- Submit Button -->
            <div class="text-right">
                <button type="submit" class="px-6 py-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Submit
                </button>
            </div>
            </div>
            


           
        </form>
    </div>


@endsection