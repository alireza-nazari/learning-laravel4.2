@extends('layouts.default')

@section('content')
    <h1>Hello, {{ $user->username }} <a href="/orders/"><span >◄</span></a></h1>
    <p>{{ $user->email }}</p>
    <p>{{ $user->gender }}</p>
@stop