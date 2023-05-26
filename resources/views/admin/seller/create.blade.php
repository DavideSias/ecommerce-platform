@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('admin.seller.store') }}" method="POST" class="row g-3 needs-validation" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome Shop:</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
            <div class="invalid-feedback">
                @error('name')
                    <ul>
                        @foreach ($errors->get('name') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="vat_number" class="form-label">Partita IVA:</label>
            <input type="text" class="form-control @error('vat_number') is-invalid @enderror" id="vat_number" name="vat_number" value="{{ old('vat_number') }}">
            <div class="invalid-feedback">
                @error('vat_number')
                    <ul>
                        @foreach ($errors->get('vat_number') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="logo_image" class="form-label">Immagine Logo:</label>
            <input type="text" class="form-control @error('logo_image') is-invalid @enderror" id="logo_image" name="logo_image" value="{{ old('logo_image') }}">
            <div class="invalid-feedback">
                @error('logo_image')
                    <ul>
                        @foreach ($errors->get('logo_image') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="cover_image" class="form-label">Immagine Copertina:</label>

            <input id="cover_image" type="text" class="form-control @error('cover_image') is-invalid @enderror" name="cover_image" value="{{ old('cover_image') }}" required autocomplete="cover_image" autofocus>

            @error('cover_image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Registrami</button>
        </div>
    </form>
</div>
@endsection
