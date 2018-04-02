@extends('layouts.default')
@section('head')
	<title>Weclome to the Laravel</title>
@stop
@section('navigation')
	<nav>
        <ul>
            <li><a class="active" href="/">HOME</a></li>
			<li><a href="/about">ABOUT</a></li>
            <li><a href="/blog">BLOG</a></li>
            <li><a href="/users">USERS</a></li>
            <li><a href="/orders">ORDERS</a></li>
        </ul>
    </nav>
@stop
@section('content')
	<h1>Weclome Dear User</h1>
	<h3>We have something new for you</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam varius lacinia ipsum, quis fermentum dui placerat vitae. Morbi pharetra risus eu enim venenatis tempor. Cras elementum metus elit, sit amet fermentum nunc semper in. Suspendisse vitae condimentum lectus. Donec malesuada nisi ornare consectetur ullamcorper. Pellentesque commodo tortor arcu, nec iaculis ipsum laoreet id. Praesent vehicula risus consequat gravida iaculis. Vivamus fringilla, turpis eget varius vulputate, risus magna aliquet metus, quis interdum arcu turpis at mauris. In non odio ut odio sagittis commodo. Donec libero leo, rutrum eu gravida eget, tristique sollicitudin massa. Morbi blandit fermentum purus sit amet rhoncus. Nam sit amet nisi sapien. Nulla bibendum ac nibh tincidunt cursus. Curabitur convallis aliquet turpis nec auctor. Nullam volutpat eleifend maximus. Sed accumsan non tellus nec lobortis. In accumsan at libero ut ultrices. Mauris at consequat lacus, ut vulputate eros. Morbi sit amet arcu felis. Etiam dictum diam feugiat sem sodales, ac dictum quam suscipit. Sed vulputate, diam sed mattis facilisis, lacus justo semper nibh, quis gravida ex mi vitae sem. Curabitur iaculis leo nec sapien commodo aliquam. Phasellus aliquet ipsum nec nulla iaculis, placerat consectetur magna hendrerit.</p>
@stop