<div class="row">
    <div class="col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
        {!! Form::model($task, $request_params) !!}
            <div class="form-group">
                {!! Form::label('content', 'Task') !!}
                {!! Form::text('content', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('status', 'Status') !!}
                {!! Form::text('status', null, ['class' => 'form-control']) !!}
            </div>
        {!! Form::submit($submit_name, ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
