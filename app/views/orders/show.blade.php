@extends('layouts.default')

@section('content')
    <h1>Order: {{ $order->ordername }} <a href="/orders/"><span >◄</span></a></h1> 
    <h4>{{ $order->orderdate }}</h4>
    <p>{{ $order->orderinfo }}</p>
@stop