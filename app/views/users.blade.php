<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('public/assets/css/style.css')}}">
    <title>User List</title>
    

</head>
<body>
    <nav>
        <ul>
            <li><a href="/">HOME</a></li>
            <li><a href="/about">ABOUT</a></li>
            <li><a href="/blog">BLOG</a></li>
            <li><a class="active" href="/users">USERS</a></li>
        </ul>
    </nav>
    <h1>All User List</h1>
    <h3>by ID</h3>
    <p>Morbi pharetra risus eu enim venenatis tempor. Cras elementum metus elit, sit amet fermentum nunc semper in. Suspendisse vitae condimentum lectus. Donec malesuada nisi ornare consectetur ullamcorper. Pellentesque commodo tortor arcu, nec iaculis ipsum laoreet id.</p>
    <table>
        <tr>
            <th>#</th>
            <th>User</th>
            <th>Email</th>
            <th>Gender</th>
        </tr>
        @if (isset($users))
            <h3>Users table isset</h3>
        @endif
        @foreach ( $users as $user )
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->gender }}</td>
            </tr>           
        @endforeach
    </table>
    <p>Nam sit amet nisi sapien. Nulla bibendum ac nibh tincidunt cursus. Curabitur convallis aliquet turpis nec auctor. Nullam volutpat eleifend maximus. Sed accumsan non tellus nec lobortis. In accumsan at libero ut ultrices. Mauris at consequat lacus, ut vulputate eros. Morbi sit amet arcu felis. Etiam dictum diam feugiat sem sodales, ac dictum quam suscipit. Sed vulputate, diam sed mattis facilisis, lacus justo semper nibh, quis gravida ex mi vitae sem. Curabitur iaculis leo nec sapien commodo aliquam.</p> 
    <table>
        <tr>
            <th>#</th>
            <th>Order</th>
            <th>Information</th>
            <th>Date</th>
        </tr>
        @if (isset($orders))
            <h3>Order table isset</h3>
        @endif
        @foreach ( $orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->ordername }}</td>
                <td>{{ $order->orderinfo }}</td>
                <td>{{ $order->orderdate }}</td>
            </tr>
        @endforeach
    </table>
    <button>Limit 2</button>
</body>
</html>