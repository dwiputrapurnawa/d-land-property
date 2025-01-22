<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="robots" content="noindex, nofollow">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.11/jquery.lazy.min.js"></script>
<link rel="stylesheet" href="/css/panel.css">
</head>
<body class="bg-gray-100">

  @if (session('update_available'))
  <div id="updateAlert" class="bg-yellow-500 text-white p-4 text-center relative">
      <span>{{ session('update_available') }}</span>
      
      <!-- Update Now Button -->
      <a href="{{ route('update.web') }}" 
         class="bg-white text-yellow-500 font-bold py-1 px-4 rounded ml-4 hover:bg-gray-200 transition">
          Update Now
      </a>

      <!-- Close Button -->
      <button id="closeAlertButton" class="absolute top-0 right-0 mt-1 mr-2 text-white text-xl font-bold">&times;</button>
  </div>
@endif

@if (session('success'))
    <div id="updateSuccessAlert" class="bg-green-500 text-white p-4 text-center relative">
        <span>{{ session('success') }}</span>
        
        <!-- Close button -->
        <button id="closeSuccessAlertButton" class="absolute top-0 right-0 mt-1 mr-2 text-white text-xl font-bold">&times;</button>
    </div>
@endif





  <input type="hidden" name="upload-img" value="{{ route('upload.image') }}">

  <!-- Sidebar -->
  <div class="flex min-h-screen">
    <aside class="w-64 bg-blue-600 text-white flex flex-col">
      <div class="p-4 text-center text-xl font-bold border-b border-blue-500 flex flex-row items-center">
        <a href="{{ route('home.page') }}"><img src="/images/logo.webp" class="w-10 h-10" alt="logo-img" srcset=""></a>
        <a href="{{ route('admin.panel') }}" class="text-white ml-2">Admin Panel</a>
    </div>
    
      <nav class="flex flex-col mt-4">
        <a href="{{ route('admin.panel') }}" class="flex items-center px-4 py-2 hover:bg-blue-700 {{ Route::is('admin.panel') ? 'bg-blue-700' : '' }}">
          <!-- Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="20" height="20" class="mr-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
          </svg>
          <!-- Text -->
          <span>Dashboard</span>
        </a>        
        <a href="{{ route('admin.project') }}" class="flex items-center px-4 py-2 hover:bg-blue-700 {{ Route::is('admin.project') ? 'bg-blue-700' : '' }}">
          <!-- Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="20" height="20" class="mr-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
          </svg>
          <!-- Text -->
          <span>Project</span>
        </a>
        
        <a href="{{ route('admin.news') }}" class="flex items-center px-4 py-2 hover:bg-blue-700 {{ Route::is('admin.news') ? 'bg-blue-700' : '' }}">
          <!-- Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="20" height="20" class="mr-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
          </svg>
          <!-- Text -->
          <span>News</span>
        </a>
        
        <a href="{{ route('admin.company') }}" class="flex items-center px-4 py-2 hover:bg-blue-700 {{ Route::is('admin.company') ? 'bg-blue-700' : '' }}">
          <!-- Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="20" height="20" class="mr-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
          </svg>
          <!-- Text -->
          <span>Company</span>
        </a>
        
        <a href="{{ route('admin.logout') }}" class="flex items-center px-4 py-2 hover:bg-blue-700">
          <!-- Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="20" height="20" class="mr-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
          </svg>
          <!-- Text -->
          <span>Logout</span>
        </a>
        
      </nav>

      <!-- Software Version in Sidebar -->
      <div class="mt-auto p-4 bg-blue-700 text-center">
        <span class="text-white text-lg font-semibold">v1.1</span>
    </div>
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
