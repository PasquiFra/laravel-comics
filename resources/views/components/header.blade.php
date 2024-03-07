
@php
 $navs=config('links');   
@endphp


<header>
    <div class="container flex justify-header">

        <figure>
            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="DC Logo">
        </figure>
        <nav class="flex center">
            <ul class="flex">
                @foreach ( $navs as $nav)  
                <li class="flex center list-setup">
                    <a class="link-setup flex center" href="{{route(strtolower($nav['text']))}}">
                        {{$nav['text']}}
                    </a>
                </li>
                @endforeach
            </ul>
        </nav>

    </div>
</header>

<div class="background"></div>
