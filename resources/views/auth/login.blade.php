<form action="{{route('login')}}" method="POST">
    @csrf
    <input type="text" name="email" value="{{old("email")}}" placeholder="email" required>
    @error('email')
        {{ $message }}
    @enderror
    <input type="password" name="password" placeholder="senha" required>
    @error('password')
        {{ $message }}
    @enderror
    <button type="submit">Entrar</button>
</form>

<a href="{{ route('register') }}">Não tem conta? Registre-se</a>

@session('success')
    <div>
        {{ session('success') }}
    </div>
@endsession

