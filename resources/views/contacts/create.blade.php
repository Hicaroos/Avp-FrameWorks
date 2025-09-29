@extends('layout.app')

@section('title', 'Novo Contato')

@section('content')

<div class="d-flex justify-content-center align-items-center vh-90">
    <div class="w-auto card shadow-lg p-3 mb-5 bg-body-tertiary rounded" style="min-width: 400px;">
        <div class="card-body ">
    
            <h1 class="text-center mb-4">Novo Contato</h1>
    
            @if ($errors->any())
                <div class="alert alert-secondary">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    
            <form action="{{ route('contacts.store') }}" method="POST">
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
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="" value="{{ old('phone') }}" required>
                    <label for="phone">Telefone</label>
                </div>
    
                <div class="form-floating mb-3">
                    <textarea class="form-control" name="address" id="address" placeholder="" style="height: 100px">{{ old('address') }}</textarea>
                    <label for="address">Endereço</label>
                </div>
    
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
                    <a href="{{ route('contacts.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                </div>
            </form>
    
        </div>
    </div>
</div>
@endsection