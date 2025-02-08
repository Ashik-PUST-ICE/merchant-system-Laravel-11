@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Admin Dashboard</h1>
        <h3>Merchants List</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Shop Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($merchants as $merchant)
                    <tr>
                        <td>{{ $merchant->name }}</td>
                        <td>{{ $merchant->email }}</td>
                        <td>{{ $merchant->shop_name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
