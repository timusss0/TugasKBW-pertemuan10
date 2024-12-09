<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>biodata</title>
</head>
<body>
    <h1>List of Biodatas</h1>
    <ul>
        @foreach ($biodatas as $biodata)
            <li>{{ $biodata['first_name'] }} {{ $biodata['last_name'] }}</li>
        @endforeach
    </ul>
</body>
</html>