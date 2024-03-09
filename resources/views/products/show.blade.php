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
                    <div id="info" class="flex space-between">
                        <div class="price flex space-between">
                            <div>
                                U.S. Price: <span>{{$comic['price']}}</span>
                            </div>
                            <div>AVAILABLE</div>
                        </div>
                        <div class="available flex center">
                            <div class="check-available">Check availability</div>
                        </div>
                    </div>
                    <p> {{$comic['description']}} </p>
                </div>
                <div id="adv">
                    <img src=" {{Vite::asset('/resources/img/adv.jpg')}} " alt="DC POWER VISA">
                </div>
            </div>
            <div class="flex space-between">
                <div>
                    <h3>Talent</h3>
                    <ul>
                        Art by:
                        <li>
                        
                        </li>
                    </ul>
                    <ul>
                        Written by:
                        <li>
                        
                        </li>
                    </ul>
                </div>
                <div>
                    <h3>Specs</h3>
                    <ul>
                        Series:
                        <li>
                        
                        </li>
                    </ul>
                    <div>
                        U.S. Price: <span>{{$comic['price']}}</span>
                    </div>
                    <div>
                        On Sale Date: 
                    </div>
                </div>
            </div>
            
        </div>
    </section>
@endsection
