@extends('layouts.main')

@section('content')

<div class="container-fluid px-4">
                        <h1 class="mt-4">Countries</h1>
</div> 

<div class="card-body">
    <div class="row">
  <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                {{ __('Create Country') }}
                <a href="{{ route('countries.index') }}" class="float-right">Back</a>
            </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('countries.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="country_code" class="col-md-4 col-form-label text-md-end">{{ __(' Country code') }}</label>

                            <div class="col-md-6">
                                <input id="country_code" type="text" class="form-control @error('country_code') is-invalid @enderror" name="country_code" value="{{ old('country_code') }}" required autocomplete="username" autofocus>

                                @error('country_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Country Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="first_name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Store') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection