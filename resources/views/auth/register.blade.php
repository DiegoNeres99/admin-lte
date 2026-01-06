@extends('layouts.auth')
@section('body-class','register-page')
@section('content')
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <title>Registrar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/scss/app.scss')
</head>

<body class="register-page bg-light d-flex align-items-center justify-content-center" style="min-height:100vh;">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header text-center bg-primary text-white rounded-top-4">
                        <h3><i class="bi bi-person-plus-fill"></i> Criar Conta</h3>
                    </div>
                    <div class="card-body p-4">
                        <p class="text-center text-muted">Preencha os dados abaixo para se registrar</p>

                        @session('status')
                    <div class="alert alert-success m-3" role="alert">
                         Usuário registrado com sucesso!
                    </div>
                    @endsession

                        <form action="{{ route('register') }}" method="POST">
                            @csrf

                            {{-- Nome --}}
                            <div class="mb-3">
                                <label class="form-label">Nome</label>
                                <input type="text"
                                    name="name"
                                    value="{{ old('name') }}"
                                    class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Digite seu nome">
                                @error('name')
                                <div class="invalid-feedback">O nome é obrigatório.</div>
                                @enderror
                            </div>

                            {{-- Email --}}
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="Digite seu email">
                                @error('email')
                                <div class="invalid-feedback">Informe um email válido.</div>
                                @enderror
                            </div>

                            {{-- Senha --}}
                            <div class="mb-3">
                                <label class="form-label">Senha</label>
                                <input type="password"
                                    name="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    placeholder="Digite sua senha">
                                @error('password')
                                <div class="invalid-feedback">A senha deve ter no mínimo 8 caracteres.</div>
                                @enderror
                            </div>

                            {{-- Confirmar senha --}}
                            <div class="mb-3">
                                <label class="form-label">Confirmar Senha</label>
                                <input type="password"
                                    name="password_confirmation"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    placeholder="Confirme sua senha">
                                @error('password_confirmation')
                                <div class="invalid-feedback">As senhas não conferem.</div>
                                @enderror
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-success btn-lg">
                                    <i class="bi bi-check-circle"></i> Registrar
                                </button>
                            </div>
                        </form>

                        <p class="text-center mt-3 mb-0">
                            <a href="{{ route('login') }}" class="text-decoration-none">
                                Já tenho uma conta
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>

</html>
@endsection