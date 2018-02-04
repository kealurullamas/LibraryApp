@extends('Layouts.app')

@section('content')
    <div class="container">
        <h1>Welcome to Sotero H. Laurel Academic Resource Center</h1>
        {!!Form::open(['action'=>"BooksController@search",'method'=>'POST'])!!}
        {{Form::label('title','Search A book')}}
        {{Form::text('book','',[])}}
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
        {!!Form::close()!!} 
    </div>
    
@endsection