@extends('layouts.app')

@section('content')
<h1 style='margin-bottom:30px;'>Create New Task</h1>

<div class="row">
        <div class="col-6">
            <!--新規作成フォーム-->
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
                <div class="form-group">
                    {!! Form::label('content', 'Task :') !!}
                    {!! Form::text('content', null, ['class' => 'form-controll']) !!}
                </div>
                {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                
            {!! Form::close() !!}
                
        </div>   
</div>


@endsection