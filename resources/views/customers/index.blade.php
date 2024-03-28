@extends('layouts.layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br/>
        @endif
        <div class="my-5">
            <a href="/customers/create" class="btn btn-primary">Create Customer</a>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>User Type</td>
                <td colspan="2">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{$customer->id}}</td>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->user_type}}</td>
                    <td><a href="{{ route('customers.edit', $customer->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('customers.destroy', $customer->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
@endsection
