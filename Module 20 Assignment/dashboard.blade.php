
@extends('layouts.app')

@section('content')
<div class="grid grid-cols-3 gap-4">
    <div class="p-4 bg-white shadow">
        <h3>Total Products</h3>
        <p>{{ $totalProducts }}</p>
    </div>
    <div class="p-4 bg-white shadow">
        <h3>Total Customers</h3>
        <p>{{ $totalCustomers }}</p>
    </div>
    <div class="p-4 bg-white shadow">
        <h3>Total Sales</h3>
        <p>${{ number_format($totalSales, 2) }}</p>
    </div>
</div>
@endsection