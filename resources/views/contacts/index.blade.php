<H1>Contatos</H1>

<form action="{{route('logout')}}" method="POST">
    @csrf
    <button type="submit">Sair</button>
</form>