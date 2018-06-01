@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editing ID: {{ $task->id }} </h1>
        
        @include('commons.input')
    </div>
@endsection