@extends('layouts.master')

@section('content')

    <div class="card" style="width: 36rem">
        <div class="card-header">
            <ul class="nav mb-0 justify-content-between px-4 py-2" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <div
                        class="nav-link active fs-1 nav-active text-center fw-bold"
                        id="pills-home-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#pills-home"
                        type="button"
                        role="tab"
                        aria-controls="pills-home"
                        aria-selected="true"
                    >
                        Log in
                    </div>
                </li>
                <li class="nav-item" role="presentation">
                    <div
                        class="nav-link fs-1 nav-active text-center fw-bold"
                        id="pills-profile-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#pills-profile"
                        type="button"
                        role="tab"
                        aria-controls="pills-profile"
                        aria-selected="false"
                    >
                        Register
                    </div>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3 row">
                                <label for="email_in" class="mb-2 ms-3 fw-bold">Email</label>
                                <div class="">
                                    <input id="email_in" type="email" class="form-control form-control-lg rounded-pill @error('email_in') is-invalid @enderror" name="email_in" value="{{ old('email_in') }}" required autocomplete="email_in" autofocus />

                                    @error('email_in')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="password_in" class="mb-2 ms-3 fw-bold">Password</label>
                                <div class="">
                                    <input id="password_in" type="password" class="form-control form-control-lg rounded-pill @error('password_in') is-invalid @enderror" name="password_in" required autocomplete="current-password" />
                                    @error('password_in')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-5 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                                <label class="form-check-label" for="exampleCheck1">Forget password</label>
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <button type="submit" class="btn btn-danger mb-0 fs-3 fw-bold rounded-pill">Login</button>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade @if(!$errors->register->isEmpty()) show active @endif" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
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

                                    @error('email')
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
                    </div>
                </div>
            </blockquote>
        </div>
    </div>
@endsection
