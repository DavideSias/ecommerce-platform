@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('admin.customer.update', ['customer' => $customer]) }}" method="POST" class="row g-3 needs-validation" enctype="multipart/form-data" novalidate>
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="first_name" class="form-label">Nome:</label>
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ old('first_name', $customer->first_name) }}">
                <div class="invalid-feedback">
                    @error('first_name')
                        <ul>
                            @foreach ($errors->get('first_name') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Cognome:</label>
                <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ old('last_name', $customer->last_name) }}">
                <div class="invalid-feedback">
                    @error('last_name')
                        <ul>
                            @foreach ($errors->get('last_name') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Indirizzo:</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address', $customer->address) }}">
                <div class="invalid-feedback">
                    @error('address')
                        <ul>
                            @foreach ($errors->get('address') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="phone_number" class="form-label">Nome:</label>
                <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" value="{{ old('phone_number', $customer->phone_number) }}">
                <div class="invalid-feedback">
                    @error('phone_number')
                        <ul>
                            @foreach ($errors->get('phone_number') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Modifica Dati</button>
            </div>
        </form>
    </div>
@endsection
