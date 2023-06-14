@extends('layout.app');

@section('title-page')
    Home
@endsection

@section('content')

<div class="content">
    <img src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="jumbotron">

    <div class="current-series">
        <span class="series-text">CURRENT SERIES</span>
    </div>
</div>



<div class="large-container">

    <div class="container-comics">
        
        @foreach($comics as $elem)  
            <div class=" comic-card">  
                <img src="{{ $elem['thumb'] }}" alt="comics">

                <a href="{{ route( 'comics.show', ['comic' => $elem->id] ) }}">
                    <p>{{ $elem['series'] }} </p>   
                </a>
            </div> 
        @endforeach
         
    </div>

    <div class="center">
        <a href="{{ route( 'comics.create') }}">
            <span class="load-more">ADD CARD</span>
        </a>
    </div>

</div>

<div class="listIcons">
    <ul>
        <li>
            <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}" alt="DIGITAL COMICS">
            <a href="/">DIGITAL COMICS</a>
        </li>
        <li>
            <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}" alt="DC MERCHANDISE">
            <a href="/">DC MERCHANDISE</a>
        </li>
        <li>
            <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}" alt="SUBSCRIPTION">
            <a href="/">SUBSCRIPTION</a>
        </li>
        <li>
            <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}" alt="COMIC SHOP LOCATOR">
            <a href="/">COMIC SHOP LOCATOR</a>
        </li>
        <li>
            <img src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg') }}" alt="DC POWER VISA">
            <a href="/">DC POWER VISA</a>
        </li>
    </ul>
</div>
    
@endsection