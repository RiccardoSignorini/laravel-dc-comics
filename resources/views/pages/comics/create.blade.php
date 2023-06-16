@extends('layout.app')

@section('title')
    DC COMICS | Create
@endsection

@section('content')
    <div class="container">
        <h2 class="text-center">MAKE YOUR COMIC</h2>

        <form action="{{route('comics.store')}}" method="POST">

            @csrf

            <div class="form-group my-2">
                <label class="form-label" for="">TITLE</label>
                <input class="form-control" type="text" name="title">
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="">DESCRIPTION</label>
                <textarea class="form-control" name="description" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="">THUMB</label>
                <input class="form-control" type="text" name="thumb">
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="">PRICE</label>
                <input class="form-control" type="text" name="price">
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="">SERIES</label>
                <input class="form-control" type="text" name="series">
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="">SALE DATE</label>
                <input class="form-control" type="date" name="sale_date">
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="">TYPE</label>
                <input class="form-control" type="text" name="type">
            </div>

            <button type="submit" class="btn btn-primary my-3">MAKE COMIC</button>
        </form>    
    </div>
    
@endsection