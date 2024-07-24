<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Navbar -->
    <nav class="bg-gray-800 text-white p-4">
        <div class="container mx-auto">
            <a href="{{ url('/') }}" class="px-4 py-2 hover:bg-gray-700">Home</a>
            <a href="{{ route('stores.index') }}" class="px-4 py-2 hover:bg-gray-700">Stores</a>
        </div>
    </nav>

    <!-- Main content -->
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold">Welcome to Our Application</h1>
        <p class="mt-2">This is the homepage of our Laravel application.</p>
    </div>
</body>
</html>