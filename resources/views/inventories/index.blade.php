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
            <a href="/inventories/create" class="btn btn-primary">Create Inventory</a>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Description</td>
                <td>Quantity</td>
                <td colspan="2">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($inventories as $inventory)
                <tr>
                    <td>{{$inventory->id}}</td>
                    <td>{{$inventory->name}}</td>
                    <td>{{$inventory->description}}</td>
                    <td>{{$inventory->quantity}}</td>
                    <td><a href="{{ route('inventories.edit', $inventory->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('inventories.destroy', $inventory->id)}}" method="post">
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
