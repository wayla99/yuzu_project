@extends('layouts.master')

@section('contentRegister')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="row g-3 mb-3">
            <div class="col">
                <label for="firstname" class="mb-2 ms-3 fw-bold">First name</label>
                <input id="firstname" type="text" class="form-control form-control-lg rounded-pill @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus aria-label="First name" />

                @error('firstname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col">
                <label for="lastname" class="mb-2 ms-3 fw-bold">Last name</label>
                <input  id="lastname" type="text" class="form-control form-control-lg rounded-pill @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus aria-label="Last name" />

                @error('lastname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="mb-2 ms-3 fw-bold">Email</label>
            <div class="">
                <input id="email" type="email" class="form-control form-control-lg rounded-pill @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />

                @error('email_regis')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="password" class="mb-2 ms-3 fw-bold">Password</label>
            <div class="">
                <input id="password" type="password" class="form-control form-control-lg rounded-pill @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="mb-5 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" />
            <label class="form-check-label" for="exampleCheck1">Remember password</label>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <button type="submit" class="btn btn-danger mb-0 fs-3 fw-bold rounded-pill">Register</button>
        </div>
    </form>
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="firstname" class="col-md-4 col-form-label text-md-end">{{ __('FirstName') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>--}}

{{--                                @error('firstname')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mb-3">--}}
{{--                            <label for="lastname" class="col-md-4 col-form-label text-md-end">{{ __('LastName') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>--}}

{{--                                @error('lastname')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@endsection
