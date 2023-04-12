<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    @vite('resources/js/app.js')
</head>
<body>
    {{-- Main --}}
    <main>
        {{-- Riga --}}
        <div class="row">
            {{-- Ciclo --}}
            @foreach ($movies as $movie)
                {{-- Colonna --}}
                <div class="col">
                    {{-- Carta --}}
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">{{ $movie->title }}</h5>
                          <p class="card-text">{{ $movie->original_title }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">{{ $movie->nationality }}</li>
                          <li class="list-group-item">{{ $movie->date }}</li>
                          <li class="list-group-item">{{ $movie->vote }}</li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>