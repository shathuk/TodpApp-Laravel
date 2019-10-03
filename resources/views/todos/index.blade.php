@extends('layouts.app')

@section('content')
<h1 class="p">Todos</h1>
    @if(count($todos) > 0)
        @foreach($todos as $todo)
        <div class="card todoContainer">
            <h2 class="p"> <a href="todo/{{$todo->id}}">{{$todo->text}}</a></h2>
            <span class="bg-danger p">{{$todo->due}}</span>
        </div>     
        @endforeach 
       
    @endif
@endsection