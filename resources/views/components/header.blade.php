<header class="bg-dark text-white p-3 mb-4">
    <div class="container d-flex justify-content-between align-items-center">
        <a href="{{ route('contacts.index') }}" class="h4 text-white text-decoration-none">Meus Contatos</a>
        <nav>
            @auth
                <span class="me-3">Olá, {{ Auth::user()->name }}</span>
                <form action="{{route('logout')}}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-secondary btn-sm">Sair</button>
                </form>
            @endauth
        </nav>
    </div>
</header>