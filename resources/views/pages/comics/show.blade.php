@extends('layout.app')

@section('title')
    DC COMICS | Show
@endsection

@section('content')
    
    <div class="container">

       <h2 class="text-center mt-5">View Comic!</h2> 

       <div class="d-flex flex-wrap container text-center justify-content-around p-5">

            <div class="card text-center mx-4 my-4">
                <img src="{{ $single_comic->thumb }}" alt="">
                <div class="icon my-3" style="height: 350px">
                    <h6>{{ $single_comic->title }}</h6>
                    <p>Type:{{ $single_comic->type }}</p>
                    <p>Price:{{ $single_comic->series }}</p>
                    <p>Price:{{ $single_comic->sale_date }}</p>
                    <p>Price:{{ $single_comic->price }}</p>
                    <div class="overflow-auto my-2" style="height: 100px">
                        <p>Price:{{ $single_comic->description }}</p>    
                    </div>
                    <button type="submit" class="btn btn-primary">Change</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </div>

        </div>
        
    </div>

@endsection