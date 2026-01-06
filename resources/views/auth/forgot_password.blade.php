@extends('layouts.auth')
@section('body-class', 'login-page')

@section('content')
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <title>Recuperar Senha</title>
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
                        <h3>Resetar Senha</h3>
                    </div>

                    @session('status')
                    <div class="alert alert-success m-3" role="alert">
                        O link para redefinição de senha foi enviado para seu email!
                    </div>
                    @endsession



                    <div class="card-body p-4">
                        <p class="text-center text-muted">Digite seu email para recuperar a senha</p>

                        <form method="POST" action="{{ route('password.email') }}">
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



                            {{-- Botão --}}
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success btn-lg">
                                    Enviar token de Recuperação
                                </button>
                            </div>
                        </form>

                        {{-- Links --}}
                        <div class="text-center mt-3">
                            <div class="text-center mt-3">
                                <a href="{{ route('login') }}" class="text-decoration-none">
                                    Voltar a tela de login
                                </a>
                            </div>

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