@extends('layouts.app')

@section('content')
<h1 style='margin-bottom:30px;'>All Tasks</h1>

<!--新規作成ページへのリンク-->
{!! link_to_route('tasks.create', "Create", [], ['class' => 'btn btn-primary', 'style' => 'margin:10px 0;']) !!}

<!--Task一覧表示-->
@if (count($tasks) > 0)
@foreach($tasks as $task)
    <div class="card" style="margin-bottom:15px;">
        <div class="card-header">
            {!! link_to_route('tasks.show', "No. {$task->id}", [$task->id], ['class' => 'nav-link']) !!}
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ $task->content }}</h5>
        </div>
    </div>
@endforeach
@endif

@endsection