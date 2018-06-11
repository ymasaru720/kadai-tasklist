@extends('layouts.app')

@section('content')
   
    <h1>id = {{ $task->id }} のメッセージ詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>ステータス</thr>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <th>ステータス{{ $task->status }}</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    
    {!! link_to_route('tasks.edit', 'edit', ['id'=>$task->id], ['class' => 'btn btn-default']) !!}
    
    
    {!! Form::model($task, ['route'=>['tasks.destroy', $task->id], 'method'=>'delete']) !!}
        {!! Form::submit('delete') !!}
    {!! Form::close() !!}
@endsection