@extends('layouts.app')

@section('content')
<a href="/" class="btn btn-light">Go back</a>
<div class="card btn-light">


    <h1 class="p">{{$todo->text}}</h1>
    <p class="p bg-primary inline">{{$todo->due}}</p>
    <p class="p my-1">{{$todo->body}}</p>
    <br> <br> <br>
    <div class="edit-delete">
        <a href="/todo/{{$todo->id}}/edit" class="btn btn-dark">Edit</a>
        {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'DELETE']) !!}
            {{ Form::bsSubmit('Delete', ['class' => 'btn btn-primary']) }}
        {!! Form::close() !!}
    </div>

    
</div>

@endsection