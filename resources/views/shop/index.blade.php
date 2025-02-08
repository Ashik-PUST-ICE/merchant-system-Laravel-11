@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Welcome to {{ $store->name }}'s Shop</h1>
        <h3>Categories</h3>
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <h4>{{ $category->name }}</h4>
                    <ul>
                        @foreach ($category->products as $product)
                            <li>{{ $product->name }}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
@endsection
