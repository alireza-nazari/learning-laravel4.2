@extends('layouts.default')

@section('content')
    <h1>Create new users</h1>
    {{ Form::open(['route' => 'users.store']) }}
        <div>
            {{ Form::label('username', 'Username: *') }}
            {{ Form::input('text', 'username') }}
            {{ $errors->first('username', '<span class=error>:message</span>') }}
        </div>

        <div>
            {{ Form::label('email', 'Email: *') }}
            {{ Form::input('text', 'email') }}
            {{ $errors->first('email', '<span class=error>:message</span>') }}
        </div>

        <div>
            {{ Form::label('gender', 'Gender: *') }}
            {{ Form::select('gender', array('F' => 'Female', 'M' => 'Male', 'T' => 'Trans')) }}
            {{ $errors->first('gender', '<span class=error>:message</span>') }}
        </div>

        <div>
            {{ Form::submit('Create new user') }}
        </div>   
    {{ Form::close() }}  
@stop()