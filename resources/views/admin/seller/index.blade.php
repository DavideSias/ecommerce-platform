@extends('layouts.app')

@section('content')

    <div>
        @if($seller == null)
            Grazie per aver scelto di collaborare con noi ora non ti resta che:
            <a href="{{ route('admin.seller.create')}}">Completare il tuo profilo Shop</a>
        @else
            <div>Profilo completo</div>
            <ul>
                <li>
                    <img src="{{ $seller->logo_image }}" alt="logo">
                </li>
                <li>{{ $seller->name }}</li>
                <li>{{ $seller->vat_number }}</li>
            </ul>

            <a href="{{ route('admin.seller.edit', ['seller' => $seller])}}">Modifica dati profilo</a>
        @endif
    </div>

@endsection
