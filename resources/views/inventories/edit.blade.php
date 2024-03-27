@extends('layouts.layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Edit Inventory
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
            <form method="post" action="{{ route('inventories.update', $inventory->id ) }}" enctype="multipart/form-data">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="country_name">Name:</label>
                    <input type="text" class="form-control" name="message" value="{{ $inventory->name }}"/>
                </div>
                <div class="form-group">
                    <label for="cases">Description :</label>
                    <input type="text" class="form-control" name="flag" value="{{ $inventory->description }}"/>
                </div>
                <div class="form-group">
                    <label for="cases">Quantity :</label>
                    <input type="text" class="form-control" name="time" value="{{ $inventory->quantity }}"/>
                </div>
                <button type="submit" class="btn btn-primary">Update Inventory</button>
            </form>
        </div>
    </div>
@endsection
