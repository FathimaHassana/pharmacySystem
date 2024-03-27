<!DOCTYPE html>
<html>
<head>
    <title>Customer Details</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('customers') }}">Customer Alert</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('customers') }}">View All Customer</a></li>
            <li><a href="{{ URL::to('customers/create') }}">Create a Customer</a>
        </ul>
    </nav>

    <h1>Showing {{ $customer->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $customer->name }}</h2>
        <p>
            <strong>Email:</strong> {{ $customer->email }}<br>
        </p>
    </div>

</div>
</body>
</html>
