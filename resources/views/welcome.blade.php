<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie</title>
</head>
<body>
    @foreach ($movies as $movie)
        <h1>title: {{$movie->original_title}}</h1>
        <h2>nationality: {{$movie->nationality}}</h2>
        <h3>date: {{$movie->date}}</h3>
        <h3>vote: {{$movie->vote}}/10</h3>
    @endforeach
</body>
</html>