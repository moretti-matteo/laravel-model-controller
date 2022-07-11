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
        <x-card 
        :original_title="$movie->original_title"
        :nationality="$movie->nationality"
        :date="$movie->date"
        :vote="$movie->vote"
        />
           
        @endforeach
    </div>

</body>

</html>
