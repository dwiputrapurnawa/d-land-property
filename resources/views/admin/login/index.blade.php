<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>D'Land Property - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/login.css">
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
  <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-md">
    <!-- Logo -->
    <div class="flex justify-center">
      <img src="/images/logo-substract.webp" alt="Logo" class="w-20 h-20 mb-4">
    </div>

    <h2 class="text-2xl font-bold text-center text-gray-800">Admin Panel</h2>

    @if (session()->has('error'))
    <div class="flex flex-col bg-red-200 rounded w-full">
      <span class="text-red-500 text-center py-5">{{ session("error") }}</span>
    </div>
    @endif

    @if (session()->has('success'))
    <div class="flex flex-col bg-green-200 rounded w-full">
      <span class="text-green-500 text-center py-5">{{ session("success") }}</span>
    </div>
    @endif


   


  

    <form action="{{ route("admin.auth") }}" method="POST"  class="space-y-4">
      @csrf
      <div>
        <label class="block text-sm font-medium text-gray-700" for="username">Username</label>
        <input type="username" id="username" name="username" required class="w-full p-2 mt-1 text-gray-900 bg-gray-100 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" value="{{ old('username') }}">
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700" for="password">Password</label>
        <input type="password" id="password" name="password" required class="w-full p-2 mt-1 text-gray-900 bg-gray-100 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
      </div>

      <div class="flex items-center justify-between">
        <div class="flex items-center">
          <input type="checkbox" id="remember-me" name="remember-me" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-blue-500">
          <label for="remember-me" class="ml-2 text-sm text-gray-600">Remember me</label>
        </div>
        {{-- <a href="#" class="text-sm text-indigo-600 hover:underline">Forgot password?</a> --}}
      </div>

      <button type="submit" class="w-full py-2 text-white bg-blue-600 rounded-lg hover:bg-indigo-700 focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50">Sign In</button>
    </form>

    {{-- <p class="text-sm text-center text-gray-600">
      Don’t have an account?
      <a href="#" class="text-indigo-600 hover:underline">Sign up</a>
    </p> --}}
  </div>
</body>
</html>