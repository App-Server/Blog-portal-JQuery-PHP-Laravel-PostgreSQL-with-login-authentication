<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="theme-body">

    <div class="sidebar">
        <div class="sidebar-grid">
            <h3 class="cms">CMS Blog</h3>
            <a href="{{ url('/admin/dashboard') }}" class="nav-link"><i class="bi bi-house-door"></i>Dashboard</a>
            <a href="{{ url('/blog/create') }}" class="nav-link"><i class="bi bi-stickies"></i>Create Blog</a>
            <a href="{{ url('/blog') }}" class="nav-link"><i class="bi bi-book"></i>List Blog</a>
            <a href="{{ url('/users/create') }}" class="nav-link"><i class="bi bi-person-bounding-box"></i>Create User</a>
            <a href="{{ url('/users') }}" class="nav-link"><i class="bi bi-person-lines-fill"></i>List User</a>
            <a href="{{ url('/support') }}" class="nav-link"><i class="bi bi-ticket"></i>Support</a>
            <a href="{{ url('/settings/create') }}" class="nav-link"><i class="bi bi-gear"></i>Settings</a>
            <a href="{{ url('/admin') }}" class="nav-link"><i class="bi bi-box-arrow-in-right"></i>Logout</a>
        </div>  
    </div>

    <x-navigation />

    <div class="main-content" >
        {{ $slot }}
    </div>
  
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>