@extends('layouts.layout')

@section('title', 'Home')

@section('main-content')
    <section id="show-comics">
        <div class="stripe"></div>
        <div class="flex container">
            <div id="current-series">
                <figure>
                    <img src="{{$comic['thumb']}}" alt="">
                    <span class="add-1">COMIC BOOK</span>
                    <span class="add-2">VIEW GALLERY</span>
                </figure>
            </div>
            <div class="flex space-between">
                <div id="comic-content">
                    <h2>{{$comic['title']}}</h2>
                    <div id="info"></div>
                    <p> {{$comic['description']}} </p>
                </div>
                <div id="adv">
                    <img src=" {{Vite::asset('/resources/img/adv.jpg')}} " alt="DC POWER VISA">
                </div>
            </div>
            
        </div>
    </section>
@endsection
