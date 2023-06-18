@extends('layout.app')

@section('title')
    laravel dc Comics | Comics edit
@endsection

@section('content')

<div class="container">

    <h1>Modifica il tuo fumetto</h1>
 
        <from action="{{route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label class="form-label" for="">Title</label>
                <input class="form-control" type="text" name="title" value="{{ old('title') ?? $comic->title}}">
            </div>
            
            <div class="form-group">
                <label class="form-label" for="">description</label>
                <textarea class="form-control" name="description" id="" cols="30" row="10">{{ old('description') ?? $comic->description}}</textarea>
            </div>
            
            <div class="form-group">
                <label class="form-label" for="">thumb</label>
                <input class="form-control" type="text" name="thumb" value="{{ old('thumb') ?? $comic->thumb}}">
            </div>
            
            <div class="form-group">
                <label class="form-label" for="">price</label>
                <input class="form-control" type="number" name="price" value="{{ old('price') ?? $comic->price}}">
            </div>
            
            <div class="form-group">
                <label class="form-label" for="">series</label>
                <input class="form-control" type="text" name="series" value="{{ old('series') ?? $comic->series}}">
            </div>
            
            <div class="form-group">
                <label class="form-label" for="">sale_date</label>
                <input class="form-control" type="date" name="sale_date" value="{{ old('sale_date') ?? $comic->sale_date}}">
            </div>
            
            <div class="form-group">
                <label class="form-label" for="">type</label>
                <input class="form-control" type="text" name="type" value="{{ old('type') ?? $comic->type}}">
            </div>
            
            <button type="submit" class="btn btn-primary">Crea il tuo fumetto</button>
            
        </form>
        
    </div>

@endsection