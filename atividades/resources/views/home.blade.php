@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-body p-4 text-center">

                <h3 class="mb-3">Seja Bem-Vindo</h3>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <p class="text-muted mb-4">
                    Você está logado!
                </p>

                <a href="{{ url('/') }}" class="btn btn-purple w-100">
                    Explorar Biblioteca
                </a>

            </div>
        </div>
    </div>
</div>
@endsection
