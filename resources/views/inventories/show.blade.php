<!DOCTYPE html>
<html>
<head>
    <title>Inventory Details</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('inventories') }}">inventory Alert</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('inventories') }}">View All inventories</a></li>
            <li><a href="{{ URL::to('inventories/create') }}">Create a inventory</a>
        </ul>
    </nav>

    <h1>Showing {{ $inventory->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $inventory->name }}</h2>
        <p>
            <strong>Description:</strong> {{ $inventory->description }}<br>
            <strong>Quantity:</strong> {{ $inventory->quantity }}
        </p>
    </div>

</div>
</body>
</html>
