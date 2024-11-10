@extends('layouts.panel')

@section('content')
    
  <div class="container bg-white p-10">
    <h2 class="my-10 text-xl text-bold">Recent Activity</h2>
    <table id="table-activity" class="table-auto flex-col" data-url="{{ route('get.activity') }}">
      <thead>
        <tr>
            <th>No</th>
            <th>User</th>
            <th>Activity</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
    </table>
  </div>

@endsection