@extends('layouts.app')

@section('content')

    <div class="text-center">
        <h1>Sign up</h1>
    </div>
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-controll w-100']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-controll w-100']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-controll w-100']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password_confirmation', 'Confirmation') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-controll w-100']) !!}
                </div>
                {!! Form::submit('Sign up', ['class' => 'btn btn-info btn-block']) !!}
            
            {!! Form::close() !!}
            
            <p class="mt-5">Already signed up <a href="#">Log in</a></p>
        
        </div>
        
    </div>

@endsection