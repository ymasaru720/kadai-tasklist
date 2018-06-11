@extends('layouts.app')

@section('content')

    <h1>id:{{$task->id}} edit tasklist</h1>
    <div class ="row">
        <div class="col-x-12 col-sm-offset-2 col-sm-8 col md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
         {!! Form::model($task, ['route' => ['tasks.update',$task->id], 'method' => 'put']) !!}
        <div class="form-group">
        {!! Form::label('status', 'status:') !!}
        {!! Form::text('status', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
        {!! Form::label('content', 'content:') !!}
        {!! Form::text('content', null, ['class'=>'form-control']) !!}
        </div>
        
        {!! Form::submit('更新',['class'=>'btn btn-defeult']) !!}
        {!! Form::close() !!}
    </div>
</div>

@endsection