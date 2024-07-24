<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stores List</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <ul>
        @foreach($stores as $store)
            <li><a href="{{ route('stores.show', $store) }}">{{ $store->name }}</a></li>
        @endforeach
    </ul>
</body>
</html>