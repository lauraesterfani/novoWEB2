@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-md-5">
        <div class="card shadow-sm">
            <div class="card-body p-4">
                <h3 class="text-center mb-4">Nova Senha</h3>

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="mb-3">
                        <input
                            type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            name="email"
                            value="{{ $email ?? old('email') }}"
                            placeholder="Email"
                            required
                            autofocus
                        >

                        @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input
                            type="password"
                            class="form-control @error('password') is-invalid @enderror"
                            name="password"
                            placeholder="New password"
                            required
                        >

                        @error('password')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <input
                            type="password"
                            class="form-control"
                            name="password_confirmation"
                            placeholder="Confirm password"
                            required
                        >
                    </div>

                    <button type="submit" class="btn btn-purple w-100">
                        Redefinir Senha
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
