@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Log in</h1>
    </div>
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-controll w-100']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-controll w-100']) !!}
                </div>
                {!! Form::submit('Log in', ['class' => 'btn btn-info btn-block']) !!}
            
            {!! Form::close() !!}
            
            <p class="mt-5">Not registered yet? {!! link_to_route('signup.get', 'Signup', [], ['class' => 'ml-3'])!!}</p>
        
        </div>
        
    </div>



@endsection