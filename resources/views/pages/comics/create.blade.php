@extends('layout.app')

@section('title')
    laravel dc Comics | Comics create
@endsection

@section('content')

<div class="container">

    <h1>Crea il fumetto</h1>

        <from action="{{route('comics.store') }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label class="form-label" for="">Title</label>
                <input class="form-control" type="text" name="title">
            </div>
            
            <div class="form-group">
                <label class="form-label" for="">description</label>
                <textarea class="form-control" name="description" id="" cols="30" row="10"></textarea>
            </div>
            
            <div class="form-group">
                <label class="form-label" for="">thumb</label>
                <input class="form-control" type="text" name="thumb">
            </div>
            
            <div class="form-group">
                <label class="form-label" for="">price</label>
                <input class="form-control" type="number" name="price">
            </div>
            
            <div class="form-group">
                <label class="form-label" for="">series</label>
                <input class="form-control" type="text" name="series">
            </div>
            
            <div class="form-group">
                <label class="form-label" for="">sale_date</label>
                <input class="form-control" type="date" name="sale_date">
            </div>
            
            <div class="form-group">
                <label class="form-label" for="">type</label>
                <input class="form-control" type="text" name="type">
            </div>
            
            <button type="submit" class="btn btn-primary">Crea il tuo fumetto</button>
            
        </form>
        
    </div>

@endsection