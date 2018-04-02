@extends('layouts.default')
@section('head_title')
    <title>Orders List</title>
@stop
@section('navigation')
    <nav>
        <ul>
            <li><a href="/">HOME</a></li>
			<li><a href="/about">ABOUT</a></li>
            <li><a href="/blog">BLOG</a></li>
            <li><a href="/users">USERS</a></li>
            <li><a class="active" href="/orders">ORDERS</a></li>
        </ul>
    </nav>
@stop
@section('content')
    <h1>All Orders</h1>

    @foreach ( $orders as $order )
        <li>{{ link_to("/orders/{$order->ordername}", $order->ordername) }}</li>
        {{--  <li>{{ $order->ordername }}</li>  --}}
    @endforeach

@stop