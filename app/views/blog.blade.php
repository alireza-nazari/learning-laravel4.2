<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('public/assets/css/style.css')}}">
    <title>{{ $blog_title }}</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">HOME</a></li>
            <li><a href="/about">ABOUT</a></li>
            <li><a class="active" href="/blog">BLOG</a></li>
            <li><a href="/users">USERS</a></li>
        </ul>
    </nav>
    <h1>{{ $blog_title }}</h1>
    <h3>{{ $blog_desc }}</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam varius lacinia ipsum, quis fermentum dui placerat vitae. Morbi pharetra risus eu enim venenatis tempor. Cras elementum metus elit, sit amet fermentum nunc semper in. Suspendisse vitae condimentum lectus. Donec malesuada nisi ornare consectetur ullamcorper. Pellentesque commodo tortor arcu, nec iaculis ipsum laoreet id. Praesent vehicula risus consequat gravida iaculis. Vivamus fringilla, turpis eget varius vulputate, risus magna aliquet metus, quis interdum arcu turpis at mauris. In non odio ut odio sagittis commodo. Donec libero leo, rutrum eu gravida eget, tristique sollicitudin massa. Morbi blandit fermentum purus sit amet rhoncus. Nam sit amet nisi sapien. Nulla bibendum ac nibh tincidunt cursus. Curabitur convallis aliquet turpis nec auctor. Nullam volutpat eleifend maximus. Sed accumsan non tellus nec lobortis. In accumsan at libero ut ultrices. Mauris at consequat lacus, ut vulputate eros. Morbi sit amet arcu felis. Etiam dictum diam feugiat sem sodales, ac dictum quam suscipit. Sed vulputate, diam sed mattis facilisis, lacus justo semper nibh, quis gravida ex mi vitae sem. Curabitur iaculis leo nec sapien commodo aliquam. Phasellus aliquet ipsum nec nulla iaculis, placerat consectetur magna hendrerit.</p>

</body>
</html>