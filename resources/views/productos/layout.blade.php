<!DOCTYPE html>
<html>
<head>
     
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite(['resources/js/app.js'])
    <title>Laravel 8 CRUD Application </title>
</head>
<body>
  
<div class="container">
    @yield('content')
</div>
   
</body>
</html>