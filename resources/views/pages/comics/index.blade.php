@extends('layout.app')

@section('title')
    DC COMICS | Index
@endsection

@section('content')
    
    <div class="container">

       <h2 class="text-center mt-5">Comics!</h2> 

       <div class="d-flex flex-wrap container text-center justify-content-around p-5">
            @foreach( $comics as $elem )
                <div class="card col-lg-2 text-center mx-4 my-4">
                    <img src="{{ $elem->thumb }}" alt="">
                    <div class="icon my-3">
                        <h5>{{ $elem->title }}</h5>
                        <p>Type:{{ $elem->type }}</p>
                        <p>Price:{{ $elem->price }}</p>
                        <a class="btn btn-primary" href="{{route('comics.edit', $elem)}}">Change</a>
                        <a class="btn btn-danger">Delete</a>
                        <div class="position-relative">
                            <a href="{{route('comics.show', ['comic' => $elem->id])}}">More info</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
    </div>

@endsection