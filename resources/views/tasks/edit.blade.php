@extends('layouts.app')

@section('content')
<h1 style='margin-bottom:30px;'>Edit Tasks</h1>

<div class="row">
        <div class="col-6">
            <!--Task編集フォーム-->
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('content', 'Task :') !!}
                    {!! Form::text('content', null, ['class' => 'form-controll']) !!}
                </div>
                {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                
            {!! Form::close() !!}
                
        </div>   
</div>


@endsection