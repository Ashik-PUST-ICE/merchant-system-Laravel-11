@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Your Stores</h1>
        <a href="{{ route('merchant.create-store') }}" class="btn btn-primary">Create New Store</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Store Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stores as $store)
                    <tr>
                        <td>{{ $store->name }}</td>
                        <td>
                            <a href="{{ route('merchant.create-category') }}" class="btn btn-info">Add Category</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
