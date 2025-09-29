@extends('layout.app')

@section('title', 'Meus Contatos')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-11 col-lg-9">
            <div class="card shadow-lg p-3 rounded">
                <div class="card-header bg-transparent d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Meus Contatos</h3>
                    <a href="{{ route('contacts.create') }}" class="btn btn-primary">Adicionar Novo Contato</a>
                </div>
                <div class="card-body">

                    @if (session('success'))
                        <div class="alert alert-light">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contacts.index') }}" method="GET" class="mb-3 d-flex">
                        <input type="text" name="search" class="form-control me-2" placeholder="Buscar contato..."
                            value="{{ request('search') }}">
                        <button type="submit" class="btn btn-secondary bi bi-search"></button>
                    </form>

                    @if ($contacts->isEmpty())
                        <div class="alert alert-info text-center">
                            Você ainda não tem contatos cadastrados.
                        </div>
                    @else
                        <div class="table-responsive">
                            <table class="table table-hover align-middle    table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Telefone</th>
                                        <th>Endereço</th>
                                        <th class="text-center" style="width: 200px;">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $contact)
                                        <tr>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->phone }}</td>
                                            <td>{{ $contact->address ?? '-' }}</td>

                                            <td class="text-center">
                                                <a href="{{ route('contacts.edit', $contact->id) }}"
                                                    class="btn btn-primary btn-sm">Editar</a>
                                                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Tem certeza que deseja excluir este contato?')">Excluir</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
