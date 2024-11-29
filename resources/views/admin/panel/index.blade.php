@extends('layouts.panel')

@section('content')
    
<div class="bg-white p-20 rounded-lg shadow-lg w-full">

    <div class="grid grid-cols-4 gap-4 text-center mb-24">
        <div class="border shadow-lg rounded p-12 w-full flex flex-col justify-between">
            <h1 class="text-2xl">{{ $total_projects }}</h1>
            <hr>
            <h1 class="text-md">Total Project</h1>
        </div>
        <div class="border shadow-lg rounded p-12 flex flex-col justify-between">
            <h1 class="text-2xl">{{ $total_news }}</h1>
            <hr>
            <h1 class="text-md">Total News</h1>
        </div>
        <div class="border shadow-lg rounded p-12 flex flex-col justify-between">
            <h1 class="text-2xl">{{ $total_consultations }}</h1>
            <hr>
            <h1 class="text-md">Consultation</h1>
        </div>
        <div class="border shadow-lg rounded p-12 flex flex-col justify-between">
            <h1 class="text-2xl">{{ $total_project_presentations }}</h1>
            <hr>
            <h1 class="text-md">Request Project Presentation</h1>
        </div>
    </div>
    

        <div class="w-full mb-12">
        <label for="table-consultation" class="text-2xl font-bold mb-2">Request Consultation</label>
        <table id="table-consultation" class="table-auto flex-col" data-url="{{ route("get.consultation") }}">
            <thead>
              <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Messenger</th>
                  <th>Date</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
      
          </tbody>
          </table>
        </div>

        <hr>

       <div class="w-full mt-12">
        <label for="table-project-presentation" class="text-2xl font-bold mb-2">Request Project Presentation</label>
        <table id="table-project-presentation" class="table-auto flex-col" data-url="{{ route("get.project.presentation") }}">
            <thead>
              <tr>
                  <th>No</th>
                  <th>Phone</th>
                  <th>Date</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
      
          </tbody>
          </table>
       </div>
  
    

</div>

@endsection