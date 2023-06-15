@extends('layout.app');

@section('title-page')
    Form Edit
@endsection

@section('content')

    <div class="container-form-card">
        <div class="container w-50">
            <h1 class="py-4">Modifica una card</h1>
            <form action="{{ route( 'comics.update', $comic ) }}" method="POST" >
    
                @csrf
                @method('PUT')
    
                <div class="form-group">
                    <label for="title-comic" class="form-label">Titolo</label>
                    <input type="text" id="title-comic" name="title" class="form-control" value="{{old('title') ?? $comic->title}}">
                </div>
    
                <div class="form-group">
                    <label for="thumb-comic" class="form-label">Immagine</label>
                    <input type="text" id="thumb-comic" name="thumb"  class="form-control" value="{{old('thumb') ?? $comic->thumb}}">
                </div>
    
                <div class="form-group">
                    <label for="description-comic" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="description-comic" cols="10" rows="4">
                        {{old('description') ?? $comic->description}}
                    </textarea>
                </div>
    
    
                <div class="form-group">
                    <label for="series-comic" class="form-label">Serie</label>
                    <input type="text" id="series-comic" name="series"  class="form-control" value="{{old('series') ?? $comic->series}}">
                </div>
    
    
                <div class="form-group">
                    <label for="type-comic" class="form-label">Tipologia</label>
                    <input type="text" id="type-comic" name="type" class="form-control" value="{{old('type') ?? $comic->type}}">
                </div>
    
                <div class="form-group">
                    <label for="price-comic" class="form-label">Prezzo</label>
                    <input type="text" id="price-comic" name="price" class="form-control" value="{{old('price') ?? $comic->price}}">
                </div>
    
                <button type="submit" class="btn btn-primary mb-5 mt-3">Invia</button>
    
            </form>
        </div>
    </div>


@endsection