@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Store</h1>
        <form action="{{ route('merchant.create-store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Store Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success mt-3">Create Store</button>
        </form>
    </div>
@endsection
