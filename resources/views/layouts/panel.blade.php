<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="Manage D'Land Properties' premium real estate listings with ease. Access property details, update listings, and streamline operations securely from the admin panel.">
  <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
  <title>Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link href="https://cdn.datatables.net/v/dt/jq-3.7.0/jszip-3.10.1/dt-2.1.8/af-2.7.0/b-3.1.2/b-colvis-3.1.2/b-html5-3.1.2/b-print-3.1.2/cr-2.0.4/date-1.5.4/fc-5.0.4/fh-4.0.1/kt-2.12.1/r-3.0.3/rg-1.5.1/rr-1.5.0/sc-2.4.3/sb-1.8.1/sp-2.3.3/sl-2.1.0/sr-1.4.1/datatables.min.css" rel="stylesheet">
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/v/dt/jq-3.7.0/jszip-3.10.1/dt-2.1.8/af-2.7.0/b-3.1.2/b-colvis-3.1.2/b-html5-3.1.2/b-print-3.1.2/cr-2.0.4/date-1.5.4/fc-5.0.4/fh-4.0.1/kt-2.12.1/r-3.0.3/rg-1.5.1/rr-1.5.0/sc-2.4.3/sb-1.8.1/sp-2.3.3/sl-2.1.0/sr-1.4.1/datatables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.9/jquery.inputmask.min.js" integrity="sha512-F5Ul1uuyFlGnIT1dk2c4kB4DBdi5wnBJjVhL7gQlGh46Xn0VhvD8kgxLtjdZ5YN83gybk/aASUAlpdoWUjRR3g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
<link rel="stylesheet" href="/css/panel.css">
</head>
<body class="bg-gray-100">

  <input type="hidden" name="upload-img" value="{{ route('upload.image') }}">

  <!-- Sidebar -->
  <div class="flex min-h-screen">
    <aside class="w-64 bg-blue-600 text-white flex flex-col">
      <div class="p-4 text-center text-xl font-bold border-b border-blue-500 flex flex-row items-center">
        <a href="{{ route('home.page') }}"><img src="/images/logo.webp" class="w-10 h-10" alt="" srcset=""></a>
        <a href="{{ route('admin.panel') }}" class="text-white ml-2">Admin Panel</a>
    </div>
    
      <nav class="flex flex-col mt-4">
        <a href="{{ route('admin.panel') }}" class="px-4 py-2 hover:bg-blue-700 {{ Route::is('admin.panel') ? 'bg-blue-700' : '' }}">Dashboard</a>
        <a href="{{ route("admin.project") }}" class="px-4 py-2 hover:bg-blue-700 {{ Route::is('admin.project') ? 'bg-blue-700' : '' }}">Project</a>
        <a href="{{ route("admin.news") }}" class="px-4 py-2 hover:bg-blue-700 {{ Route::is('admin.news') ? 'bg-blue-700' : '' }}">News</a>
        <a href="{{ route("admin.company") }}" class="px-4 py-2 hover:bg-blue-700 {{ Route::is('admin.company') ? 'bg-blue-700' : '' }}">Company</a>
        <a href="{{ route("admin.logout") }}" class="px-4 py-2 hover:bg-blue-700">Logout</a>
      </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
      
      <!-- Top Navbar -->
      <header class="flex items-center justify-between px-6 py-4 bg-white border-b border-gray-200">
        <h1 class="text-2xl font-semibold text-gray-700">Admin Dashboard</h1>
        <div class="flex items-center space-x-4">
          <span class="text-gray-700">Welcome, {{ $user->name }}</span>
          <img src="/images/avatar.webp" alt="Admin Avatar" class="w-10 h-10 rounded-full">
        </div>
      </header>

      <!-- Main Dashboard Content -->
      <main class="flex-1 p-6 space-y-6">
        
        @yield('content')
       
        
      </main>
    </div>
  </div>

  <script src="/js/panel.js"></script>
</body>
</html>
