@extends('admin.layouts.admin')

@section('content')
    <h2>Welcome, {{ auth()->guard('admin')->user()->name }}</h2>

    <div class="card">
        <h3>Total Users</h3>
        <p>150</p>
    </div>

    <div class="card">
        <h3>New Orders</h3>
        <p>23</p>
    </div>

    <div class="card">
        <h3>Revenue</h3>
        <p>$12,345</p>
    </div>
@endsection
