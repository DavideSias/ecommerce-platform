@extends('layouts.app')
    @section('content')
        {{-- @if($orders !== null && $orders->count() > 0)
            <ul>
                @foreach ($orders as $order)
                    <li>{{ $order->tot_price}}</li>
                @endforeach
            </ul>
        @else
            <div>Non hai ancora ricevuto ordini</div>
        @endif --}}
        <div>Non hai ancora ricevuto ordini</div>

    @endsection
