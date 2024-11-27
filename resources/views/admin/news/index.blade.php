
@extends('layouts.panel')

@section('content')

    
  <div class="container bg-white p-10">
 
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