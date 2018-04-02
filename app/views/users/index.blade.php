@extends('layouts.default')
@section('head_title')
    <title>Users List</title>
@stop
@section('navigation')
    <nav>
        <ul>
            <li><a href="/">HOME</a></li>
			<li><a href="/about">ABOUT</a></li>
            <li><a href="/blog">BLOG</a></li>
            <li><a class="active" href="/users">USERS</a></li>
            <li><a href="/orders">ORDERS</a></li>
        </ul>
        <ul class="sub">
            <li><a href="/users/create">CREATE NEW USER</a></li>
			<li><a href="/about">ABOUT</a></li>
        </ul>
    </nav>
@stop
@section('content')
    <h1>All Users</h1>
    @if ($users->count())
        @foreach ( $users as $user )
            <li>{{ link_to("/users/{$user->username}", $user->username) }}</li>
        @endforeach
    @else
        <p>There is no user to display</p>
    @endif
@stop