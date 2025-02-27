<!-- create.blade.php -->

@extends('layouts.layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Add Medical Inventory
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br/>
            @endif
            <form method="post" action="{{ route('customers.store') }}" enctype="multipart/form-data">
                <div class="form-group">
                    @csrf
                    <label for="name">Customer Name:</label>
                    <input type="text" class="form-control" name="name"/>
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" class="form-control" name="email"/>
                </div>
                <div class="form-group">
                    <label for="user_type">User Type :</label>
                    <input type="text" class="form-control" name="user_type"/>
                </div>
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="text" class="form-control" name="password"/>
                </div>
                <button type="submit" class="btn btn-primary">Add Customer</button>
            </form>
        </div>
    </div>
@endsection
