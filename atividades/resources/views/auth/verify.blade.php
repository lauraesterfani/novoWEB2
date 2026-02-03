@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-md-6 col-lg-5">
        <div class="card shadow-lg border-0 register-card">

            <div class="card-header text-center register-header">
                <h4 class="mb-0">
                    {{ __('Verifique Seu E-mail') }}
                </h4>
            </div>

            <div class="card-body p-4 text-center">

                @if (session('resent'))
                    <div class="alert alert-success">
                        Um novo link de verificação foi enviado para o seu e-mail.
                    </div>
                @endif

                <p class="text-muted mb-3">
                    Antes de continuar, verifique sua caixa de entrada e clique no link de verificação.
                </p>

                <p class="text-muted mb-4">
                    Não recebeu o e-mail?
                </p>

                <form method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="btn btn-purple w-100">
                        Reenviar E-mail de Verificação
                    </button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
