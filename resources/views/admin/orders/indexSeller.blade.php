@extends('layouts.app')
    @section('content')
        @if($orders !== null && $orders->count() > 0)
            <ul>
                @foreach ($orders as $order)
                    <li>{{ $order->tot_price}}</li>
                    <li>{{ $order->note}}</li>
                    <li>{{ $order->created_at}}</li>
                    <li>{{ $order->customer_id}}</li>
                    <hr>
                @endforeach
            </ul>
        @else
            <div>Non hai ancora ricevuto ordini</div>
        @endif

    @endsection
