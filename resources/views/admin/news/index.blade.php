
@extends('layouts.panel')

@section('content')

    
  <div class="container bg-white p-10">

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
 
    <div class="flex items-center justify-between">
        <h2 class="my-10 text-xl font-bold">News List</h2>
        <a href="{{ route('admin.news.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            Create New Article
        </a>
        
    </div>
    
          
          
    
    <table id="table-news" class="table-auto flex-col" data-url="{{ route("get.news") }}">
      <thead>
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Status</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
    </table>
  </div>

@endsection