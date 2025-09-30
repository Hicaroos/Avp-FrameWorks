@extends('layout.app')

@section('title', 'Editar Contato')

@section('content')

<div class="d-flex justify-content-center align-items-center vh-90">
    <div class="w-auto card shadow-lg p-3 mb-5 bg-body-tertiary rounded" style="min-width: 400px;">
        <div class="card-body ">
    
            <h1 class="text-center mb-4">Editar Contato</h1>
    
            @if ($errors->any())
                <div class="alert alert-secondary">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    
            <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
                @csrf
                @method('PUT')
    
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nome" value="{{ old('name', $contact->name) }}" required>
                    <label for="name">Nome</label>
                </div>
    
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ old('email', $contact->email) }}" required>
                    <label for="email">Email</label>
                </div>
    
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Telefone" value="{{ old('phone', $contact->phone) }}">
                    <label for="phone">Telefone</label>
                </div>
    
                <div class="form-floating mb-3">
                    <textarea class="form-control" name="address" id="address" placeholder="Endereço" style="height: 100px">{{ old('address', $contact->address) }}</textarea>
                    <label for="address">Endereço</label>
                </div>
    
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg">Atualizar</button>
                    <a href="{{ route('contacts.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                </div>
            </form>
    
        </div>
    </div>
</div>
@endsection