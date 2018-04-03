@extends('layouts.default')
@section('head_title')
    <title>Awesome Blog</title>
@stop
@section('navigation')
    <nav>
        <ul>
            <li><a href="/">HOME</a></li>
            <li><a href="/about">ABOUT</a></li>
            <li><a class="active" href="/blog">BLOG</a></li>
            <li><a href="/users">USERS</a></li>
            <li><a href="/orders">ORDERS</a></li>
        </ul>
    </nav>
@stop
@section('content')
    <h1>Awesome Blog Posts</h1>
    <div class="cats">
        @foreach ( $posts as $post )
            | <span class="cat">{{ $post->postcategory }}</span> 
        @endforeach |
    </div>
    @foreach ( $posts as $post )
        <div class="posts">
            <h2>{{ link_to("/blog/{$post->postslug}", $post->posttitle) }}<span>{{ link_to("/blog/{$post->postslug}", '►') }}</span></a></h2>
            <p class="date">
                C <span class="cre">{{ $post->created_at }}</span> | 
                U <span class="upd">{{ $post->updated_at}}</span>
            </p>
            <span class="aut">{{ link_to($post->postreference, $post->postauthor) }}</span> in 
            <span class="cat">{{ $post->postcategory }}</span> with
            <span class="tag">{{ $post->posttag }}</span> 
            <p>{{ $post->postintro }}</p>
        </div>
    @endforeach
@stop