@extends('layout.app');

@section('title-page')
    Comic
@endsection

@section('content')

<div class="show-film-container">
    <div class="container">
        <h1 class="py-4">{{ $comic->title }}</h1>
        <div class="row">
            <div class="col-4">
                <img src="{{ $comic->thumb }}" alt="" class="pb-4">
            </div>
            <div class="col-8">
                <p><strong>Trama:</strong> {{ $comic->description }}</p>
                <p><strong>Serie:</strong> {{ $comic->series }}</p>
                <p><strong>Tipologia:</strong> {{ $comic->type }}</p>
                <p><strong>Prezzo:</strong> {{ $comic->price }}</p>
            </div>
        </div>
    </div>
</div>


@endsection