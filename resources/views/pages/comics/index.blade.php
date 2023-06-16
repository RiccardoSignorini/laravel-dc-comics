@extends('layout.app')

@section('title')
    DC COMICS | Index
@endsection

@section('content')
    <h2>Content index</h2>

    <div class="container">
        <ul>
            @foreach ($comics as $elem)
                <li>{{$elem->title}}</li>
            @endforeach    
        </ul>
        
    </div>
@endsection