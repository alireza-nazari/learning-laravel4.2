@extends('layouts.default')
@section('head_title')
    <title>{{ $post->posttitle }}</title>
@stop
@section('navigation')
    <nav>
        <ul>
            <li><a href="/">HOME</a></li>
            <li><a href="/about">ABOUT</a></li>
            <li><a href="/blog">BLOG</a></li>
            <li><a href="/users">USERS</a></li>
            <li><a href="/orders">ORDERS</a></li>
        </ul>
    </nav>
@stop
@section('content')
    <div class="post">
        <h1>{{ $post->posttitle }} <a href="/blog"><span>◄</span></a></h1>
        <p class="date">
            C <span class="cre">{{ $post->created_at }}</span> | 
            U <span class="upd">{{ $post->updated_at}}</span>
        </p>
            <span class="aut">{{ link_to($post->postreference, $post->postauthor) }}</span> in 
            <span class="cat">{{ $post->postcategory }}</span> with
            <span class="tag">{{ $post->posttag }}</span> 
        <p>{{ $post->postcontent }}</p>

    </div>
@stop