@extends('layouts.app')

@section('title', 'Log in')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">

        <div class="card shadow-sm border-0">
            <div class="card-header text-center py-3 border-0" style="background-color: #c86666;">
                <h4 class="mb-0 fw-bold text-dark">Welcome back</h4>
                <small class="text-dark">Log in to your Libsys account</small>
            </div>

            <div class="card-body p-4">

                @error('email')
                    <div class="alert alert-danger py-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror

                <form method="POST" action="{{ route('login.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email"
                               name="email"
                               id="email"
                               class="form-control @error('email') is-invalid @enderror"
                               value="{{ old('email') }}"
                               placeholder="you@example.com"
                               required
                               autofocus>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password"
                               name="password"
                               id="password"
                               class="form-control"
                               placeholder="Enter your password"
                               required>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg"
                                style="background-color: #00BFFF; border-color: #00BFFF;">
                            Log in
                        </button>
                    </div>
                </form>
            </div>

            <div class="card-footer text-center bg-white border-0 pb-4">
                <span class="text-muted">Don't have an account?</span>
                <a href="{{ route('register') }}" class="text-decoration-none fw-semibold">Register</a>
            </div>
        </div>

    </div>
</div>
@endsection