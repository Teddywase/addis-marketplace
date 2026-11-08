<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Addis - E-Commerce')</title>
    @vite([
        'resources/css/app.css',
        'resources/css/navbar.css',
    ])
</head>
<body>

    <!-- Include Navbar -->
    @include('components.navbar')

    <!-- Main Content Area -->
    <main class="container">
        @yield('content')
    </main>

</body>
</html>