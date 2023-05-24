@extends('layouts.app')

@section('content')
    <ul>
        @foreach ($orders as $order)
            <li>{{ $order->tot_price}}</li>
        @endforeach
    </ul>
@endsection
