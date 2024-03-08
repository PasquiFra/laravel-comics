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
            <h2>{{$comic['title']}}</h2>
            
        </div>
    </section>
@endsection
