@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #000;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .login-container {
        background: #111;
        border-radius: 16px;
        box-shadow: 0 0 20px rgba(255, 255, 255, 0.05);
        padding: 40px;
        max-width: 420px;
        width: 100%;
    }

    .form-control {
        background-color: #1a1a1a;
        border: 1px solid #333;
        color: #fff;
    }

    .form-control::placeholder {
        color: #888;
    }

    .form-control:focus {
        border-color: #555;
        background-color: #1f1f1f;
        color: #fff;
        box-shadow: none;
    }

    .btn-login {
        background: #fff;
        color: #000;
        font-weight: bold;
        border-radius: 8px;
        transition: background 0.3s ease;
    }

    .btn-login:hover {
        background: #e0e0e0;
    }

    .text-subtle {
        color: #aaa;
    }

    .invalid-feedback {
        color: #ff4d4d;
    }
</style>

<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="login-container">
    <div class="text-center mb-4">
    <div class="d-flex justify-content-center align-items-center gap-2">
        <h3 class="fw-bold text-white mb-0">Login to Bidz</h3>
        <img src="{{ asset('images/bid.png') }}" alt="logo" width="40" style="margin-left: 4px;">
    </div>
    <p class="text-subtle mb-0 mt-2">Bet you can.</p>
</div>


        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label for="username" class="form-label text-white">Username</label>
                <input id="username" type="text" 
                    class="form-control  @error('username') is-invalid @enderror" 
                    name="username" value="{{ old('username') }}" required autofocus 
                    placeholder="Username">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="form-label text-white">Password</label>
                <input id="password" type="password" 
                    class="form-control @error('password') is-invalid @enderror" 
                    name="password" required placeholder="Password">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-login w-100" >
                    {{ __('Login') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
