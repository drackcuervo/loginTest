@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
{{-- Apellidos --}}
{{-- Apellidos --}}
                        <div class="form-group row">
                            <label for="middleName" class="col-md-2 col-form-label text-md-right">{{ __('Apellido Paterno') }}</label>

                            <div class="col-md-3">
                                <input id="middleName" type="text" class="form-control @error('middleName') is-invalid @enderror" name="middleName" value="{{ old('middleName') }}" required autocomplete="middleName" autofocus>

                            </div>
                            <label for="lastName" class="col-md-2 col-form-label text-md-right">{{ __('Apellido Materno') }}</label>

                            <div class="col-md-3">
                                <input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName" autofocus>
                            </div>
                        </div>
{{-- Apellidos --}}
{{-- Apellidos --}}


{{-- Genero Edad y Estado Civil --}}
{{-- Genero Edad y Estado Civil --}}

                        <div class="form-group row">
                            <label for="gender" class="col-md-2 col-form-label text-md-right">{{ __('Genero') }}</label>
                            <div class="col-md-2">
                                <select class="form-control" name="gender" id="gender">
                                    <option value="1">M</option>
                                    <option value="0">F</option>
                                </select>
                            </div>
                            <label for="age" class="col-md-0 col-form-label text-md-right">{{ __('Edad') }}</label>
                            <div class="col-md-2">
                                <input id="age" type="age" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age">
                            </div>
                            <label for="civilStatus" class="col-md-0 col-form-label text-md-right">{{ __('Estado Civil') }}</label>
                            <div class="col-md-2">
                                <select class="form-control" name="civilStatus" id="civilStatus">
                                    <option value="1">Soltero</option>
                                    <option value="0">Casado</option>
                                </select>
                            </div>
                        </div>

{{-- Genero Edad y Estado Civil --}}
{{-- Genero Edad y Estado Civil --}}

{{-- Interest Select --}}
{{-- Interest Select --}}
                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('Interes') }}</label>
                            <div class="col-md-8">
                                <select class="form-control" name="interest" id="interest">
                                    <option value="Preparatoria">Preparatoria</option>
                                    <option value="Licenciatura">Licenciatura</option>
                                    <option value="Posgrado">Posgrado</option>
                                </select>
                            </div>
                        </div>

{{-- Interest Select --}}
{{-- Interest Select --}}

                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-2 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-2 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
