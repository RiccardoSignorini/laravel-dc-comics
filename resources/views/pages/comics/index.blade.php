@extends('layout.app')

@section('title')
    DC COMICS | Index
@endsection

@section('content')
    

    <div class="container">

       <h2 class="text-center mt-5">This is Comics!</h2> 

       <div class="d-flex flex-wrap container text-center justify-content-around p-5">
            @foreach( $comics as $elem )
                <div class="card col-lg-2 text-center mx-4 my-4" style="width: 300px">
                    <img src="{{ $elem->thumb }}" alt="" style="height: 400px" style="width: 300px">
                    <div class="icon my-3" style="width: 300px">
                        <h6>{{ $elem->series }}</h6>
                        <p>Type:{{ $elem->type }}</p>
                        <p>Price:{{ $elem->price }}</p>
                        <button type="submit" class="btn btn-primary">Change</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            @endforeach
        </div>
        
    </div>
@endsection