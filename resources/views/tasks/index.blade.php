@extends('layouts.app')

@section('content')

@if(Auth::check())
    <h1 style='margin-bottom:30px;'>All Tasks</h1>
    
    <!--新規作成ページへのリンク-->
    {!! link_to_route('tasks.create', "Create", [], ['class' => 'btn btn-primary', 'style' => 'margin:10px 0;']) !!}
    
    <!--Task一覧表示-->
    @if (count($tasks) > 0)
        @foreach($tasks as $task)
            <div class="card" style="margin-bottom:15px;">
                <div class="card-header">
                    <h5>{{$task->user->name}}</h5>
                    {!! link_to_route('tasks.show', "No. {$task->id}", [$task->id], ['class' => 'nav-link']) !!}
                </div>
                <div class="card-body">
                  <h5 class="card-title">{{ $task->content }}</h5>
                  <p class="card-text badge badge-pill badge-info">{{ $task->status }}</p>
                </div>
            </div>
            
        @endforeach
        {{ $tasks->links() }}
    @endif
@else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Task List</h1>
                {!! link_to_route('signup.get', 'Sign up Now!', [], ['class' => 'btn btn-lg btn-primary'])!!}
            </div>
        </div>   
@endif

@endsection