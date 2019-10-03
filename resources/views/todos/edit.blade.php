@extends('layouts.app')

@section('content')
<a href="/todo/{{$todo->id}}" class="btn btn-light">Go back</a>
 <h1>Edit Todo</h1>

    {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'PUT']) !!}
        {{ Form::bsText('text', $todo->text) }}
        {{ Form::bsTextArea('body', $todo->body) }}
        {{ Form::bsText('due', $todo->due) }}
        {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary btn-block']) }}
    {!! Form::close() !!}
@endsection