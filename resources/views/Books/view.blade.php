@extends('Layouts.app')

@section('content')
    <div class="container">
        <img src="http://localhost:8080/LibraryApp/public/images/{{$books->image}}">
        <h1>{{$books->title}}</a></h1>
        <h6>{{$books->author}}</h6>
    </div>
@endsection