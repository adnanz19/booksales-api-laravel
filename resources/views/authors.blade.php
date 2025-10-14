<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Selamat Datang</title>
</head>
<body>
    <h1>Halo teman teman~</h1>
    <p>Ini adalah halaman genres</p>
    @foreach ($authors as $item)
        <ul>
            <li>{{ $item['name'] }}</li>
            <li>{{ $item['bio'] }}</li>
            <li>{{ $item['birth_date'] }}</li>
            <li>{{ $item['nationality'] }}</li>
        </ul>
    @endforeach
</body>
</html>