
@php
 $books=config('comics');   
@endphp


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Comics</title>

    {{-- Importo Bootstrap e Scss --}}
    @vite('resources/js/app.js')

</head>
<body>
    {{-- Riferimento all'Header --}}
    @include('components.header')
    
    
    <main class="flex">
        <div class="container">
            <div id="current-series">
                <h1 class="flex">current series</h1>
            </div>
            <ul class="card-col">
                @foreach ($books as $b)
                <li class="card">
                    <figure>
                        <img src="{{$b['thumb']}}" alt="">
                    </figure>
                    <h5>
                        <a href="{{$b['thumb']}}"></a>
                    </h5>
                </li>
                @endforeach
            </ul>
            <div class="flex center">
                <a class="btn" href="#">load more</a>
            </div>
        </div>
    </main>

    {{-- Riferimento al Footer-Top --}}
    @include('components.footer-top')
    
    {{-- Riferimento al Footer-Center --}}
    @include('components.footer-center')
    
    {{-- Riferimento al Footer-Bottom --}}
    @include('components.footer-bottom')

</body>
</html>