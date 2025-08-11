@extends('layouts.app')

@section('title', 'Tracking Pesanan')

@section('content')
<div style="max-width: 500px; margin: 50px auto; font-family: Poppins;">
    <h3>Tracking Pesanan</h3>
    <form action="{{ route('tracking.search') }}" method="POST" style="margin-bottom: 20px;">
        @csrf
        <input type="text" name="tracking_number" placeholder="Masukkan nomor resi" required
               style="width: 100%; padding: 8px; border-radius: 8px; border: 1px solid #ccc;">
        <button type="submit" style="margin-top: 10px; padding: 8px 15px; background: #333; color: white; border: none; border-radius: 8px;">
            Lacak
        </button>
    </form>

    @isset($trackingNumber)
        <div style="border: 1px solid #ddd; padding: 15px; border-radius: 8px;">
            <p><strong>No. Resi:</strong> {{ $trackingNumber }}</p>
            <p><strong>Status:</strong> {{ $message }}</p>
        </div>
    @endisset
</div>
@endsection
