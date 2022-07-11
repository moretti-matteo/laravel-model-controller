<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Movie</title>
</head>

<body>
    <h1 style="text-align: center">Movies:</h1>
    <div class="container">
        @foreach ($movies as $movie)
            <div class="card">
                <h1>title: {{ $movie->original_title }}</h1>
                <h2>nationality: {{ $movie->nationality }}</h2>
                <h3>date: {{ $movie->date }}</h3>
                <h3>vote: {{ $movie->vote }}/10</h3>
            </div>
        @endforeach
    </div>

</body>

</html>
