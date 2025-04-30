@extends('layouts.app')

@section('content')
<div class="auth-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="auth-form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                name="name" id="name" placeholder="Your Name" 
                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                name="email" id="email" placeholder="Your Email" 
                                value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                name="password" id="password" placeholder="Password" 
                                required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" 
                                name="password_confirmation" id="password-confirm" 
                                placeholder="Confirm Password" required autocomplete="new-password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="auth-button">REGISTER</button>
                        </div>
                        <div class="auth-footer text-center">
                            <p>Already have an account? 
                                <a href="{{ route('login') }}">Login here</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
