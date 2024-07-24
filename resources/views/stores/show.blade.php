<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Details</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <h1>{{ $store->name }}</h1>
    <p>Address: {{ $store->address }}</p>
    <p>Telephone: {{ $store->telephone }}</p>
    <p>Status: {{ $store->status ? 'Open' : 'Closed' }}</p>
    <a href="{{ route('stores.index') }}">Back to Store List</a>
</body>
</html>