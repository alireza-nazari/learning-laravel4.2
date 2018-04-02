<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{URL::asset('public/assets/css/style.css')}}">
	@yield('head_title')
</head>
<body>
    @yield('navigation')
    <div class="content">
        @yield('content')
    </div>
</body>
</html>