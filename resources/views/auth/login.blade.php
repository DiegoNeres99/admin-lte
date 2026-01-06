@extends('layouts.auth')
@section('body-class', 'login-page')

@section('content')
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/scss/app.scss')
</head>

<body class="login-page bg-light d-flex align-items-center justify-content-center" style="min-height:100vh;">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-lg border-0 rounded-4">
                {{-- Cabeçalho azul --}}
                <div class="card-header text-center bg-primary text-white rounded-top-4">
                    <h3>Acessar Conta</h3>
                </div>
                <div class="card-body p-4">
                    <p class="text-center text-muted">Digite seus dados para entrar</p>

                    @session('status')
                    <div class="alert alert-success m-3" role="alert">
                        Login efetuado com sucesso!
                    </div>
                    @endsession

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        {{-- Email --}}
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="Digite seu email"
                                autofocus>
                            @error('email')
                            <div class="invalid-feedback d-block">Informe um email válido.</div>
                            @enderror
                        </div>

                        {{-- Senha --}}
                        <div class="mb-3">
                            <label class="form-label">Senha</label>
                            <input
                                type="password"
                                name="password"
                                class="form-control @error('password') is-invalid @enderror"
                                placeholder="Digite sua senha">
                            @error('password')
                            <div class="invalid-feedback d-block">A senha deve ter no mínimo 8 caracteres.</div>
                            @enderror
                        </div>

                        {{-- Botão --}}
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-lg">
                                Entrar
                            </button>
                        </div>
                    </form>

                    {{-- Links --}}
                    <div class="text-center mt-3">
                        <a href="{{ route('password.request') }}" class="text-decoration-none">
                            Esqueceu sua senha?
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@vite('resources/js/app.js')
</body>
</html>
@endsection
