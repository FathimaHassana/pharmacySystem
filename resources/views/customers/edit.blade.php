@extends('layouts.layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card-body">
        <div class="card-header">
            Edit Customer
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
            <form method="post" action="{{ route('customers.update', $customer->id ) }}" enctype="multipart/form-data">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="country_name">Name:</label>
                    <input type="text" class="form-control" name="message" value="{{ $customer->name }}"/>
                </div>
                <div class="form-group">
                    <label for="cases">Email :</label>
                    <input type="email" class="form-control" name="flag" value="{{ $customer->email }}"/>
                </div>
                <div class="form-group">
                    <label for="cases">Password :</label>
                    <input type="text" class="form-control" name="time" value="{{ $customer->password }}"/>
                </div>
                <button type="submit" class="btn btn-primary">Update Customer</button>
            </form>
        </div>
    </div>
@endsection
