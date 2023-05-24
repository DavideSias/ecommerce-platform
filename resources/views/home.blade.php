@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Grazie per esserti registrato!') }}
                       <a href="{{ route('admin.customer.create')}}">Completa profilo</a>
                </div>
                <ul>
                    <li>{{ $customer->first_name }}</li>
                    <li>{{ $customer->last_name }}</li>
                    <li>{{ $customer->address }}</li>
                    <li>{{ $customer->phone_number }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
