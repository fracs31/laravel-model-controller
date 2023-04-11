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
                        <h5 class="card-title">{{ $movie["title"] }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie["original_title"] }}</h6>
                        <a href="#" class="card-link">{{ $movie["nationality"] }}</a>
                        <a href="#" class="card-link">{{ $movie["date"] }}</a>
                        <a href="#" class="card-link">{{ $movie["vote"] }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>