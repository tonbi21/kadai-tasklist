@extends('layouts.app')

@section('content')
<h1 style='margin-bottom:30px;'>No. {{ $task->id }} Task</h1>

<div class="card" style="margin-bottom:15px;">
    <div class="card-header">
        {!! link_to_route('tasks.show', "No. {$task->id}", [$task->id], ['class' => 'nav-link']) !!}
    </div>
    <div class="card-body">
         <h5 class="card-title">{{ $task->content }}</h5>
         <p class="card-text badge badge-pill badge-info">{{ $task->status }}</p>
         <div class= 'buttons' style="float: right;">
             
             
             <!--ログインユーザーと投稿したユーザーのIDが同じなら表示-->
             @if(Auth::id() == $task->user_id)
                 {!! link_to_route('tasks.edit', "Edit", [$task->id], ['class' => 'btn btn-warning', 'style' => 'margin-bottom:10px;']) !!}
                 {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                 {!! Form::close() !!}
            @endif
             
             
             
         </div>
    </div>
</div>



@endsection


            