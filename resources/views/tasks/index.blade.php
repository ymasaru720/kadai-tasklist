@extends('layouts.app')

@section('content')
    <h1>To-Dos</h1>
    @if(count($tasks) > 0)
        <ul>
            @foreach($tasks as $task)
                <li>{!! link_to_route('tasks.show', '[+]', ['id'=>$task->id]) !!} {{$task->content}} [ {{$task->status}} ]</li>
            @endforeach
        </ul>
    @endif
    
    {!! link_to_route('tasks.create', 'create new task') !!}
@endsection