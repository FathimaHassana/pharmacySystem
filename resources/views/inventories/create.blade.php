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
            <form method="post" action="{{ route('inventories.store') }}" enctype="multipart/form-data">
                <div class="form-group">
                    @csrf
                    <label for="name">Inventory Name:</label>
                    <input type="text" class="form-control" name="name"/>
                </div>
                <div class="form-group">
                    <label for="cases">Description :</label>
                    <input type="text" class="form-control" name="description"/>
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity :</label>
                    <input type="text" class="form-control" name="quantity"/>
                </div>
                <button type="submit" class="btn btn-primary">Add Inventory</button>
            </form>
        </div>
    </div>
@endsection
