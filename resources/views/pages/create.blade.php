@extends('layout.app');

@section('title-page')
    Form Create
@endsection

@section('content')

    <div class="container-form-card">
        <div class="container w-50">
            <h1 class="py-4">Crea una nuova card</h1>
            <form action="{{ route( 'comics.store' ) }}" method="POST" >
    
                @csrf
    
                <div class="form-group">
                    <label for="title-comic" class="form-label">Titolo</label>
                    <input class="@error('title') is-invalid @enderror" type="text" id="title-comic" name="title" class="form-control">
                    @error('title')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="thumb-comic" class="form-label">Immagine</label>
                    <input type="text" id="thumb-comic" name="thumb"  class="form-control">
                </div>
    
                <div class="form-group">
                    <label for="description-comic" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="description-comic" cols="10" rows="4"></textarea>
                </div>
    
    
                <div class="form-group">
                    <label for="series-comic" class="form-label">Serie</label>
                    <input type="text" id="series-comic" name="series"  class="form-control">
                </div>
    
    
                <div class="form-group">
                    <label for="type-comic" class="form-label">Tipologia</label>
                    <input type="text" id="type-comic" name="type" class="form-control">
                </div>
    
                <div class="form-group">
                    <label for="price-comic" class="form-label">Prezzo</label>
                    <input type="text" id="price-comic" name="price" class="form-control">
                </div>
    
                <button type="submit" class="btn btn-primary mb-5 mt-3">Invia</button>
    
            </form>
        </div>
    </div>


@endsection