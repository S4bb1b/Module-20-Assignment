
<!DOCTYPE html>
<html>
<head>
    <title>Sales Inventory System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('layouts.navigation') <main class="py-6">
        <div class="container mx-auto">
            @yield('content')
        </div>
    </main>
</body>
</html>