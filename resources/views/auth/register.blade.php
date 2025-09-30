@extends('layout.app')

@section('title', 'Registrar')

@section('content')

<div class="d-flex justify-content-center align-items-center vh-90">
    <div class="w-auto card shadow-lg p-3 mb-5 bg-body-tertiary rounded" style="min-width: 400px;">
        <div class="card-body ">

            <h1 class="text-center mb-4">Registrar</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('register') }}" method="POST">
                @csrf

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="name" id="name" placeholder="" value="{{ old('name') }}" required>
                    <label for="name">Nome</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="" value="{{ old('email') }}" required>
                    <label for="email">Email</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" id="password" placeholder="" required>
                    <label for="password">Senha</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="" required>
                    <label for="password_confirmation">Confirme a Senha</label>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
                    <a href="{{ route('login') }}" class="btn btn-outline-secondary">Já tem conta? Login</a>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection