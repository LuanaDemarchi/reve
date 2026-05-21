<div class="login-container">
    <h2>Iniciar Sesión</h2>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf <div>
            <label>Correo Electrónico:</label>
            <input type="email" name="email" value="{{ old('email') }}" required placeholder="ejemplo@mail.com">
        </div>

        <div>
            <label>Contraseña:</label>
            <input type="password" name="password" required placeholder="******">
        </div>

        <button type="submit">Ingresar</button>
    </form>

    <p>¿No tenés cuenta? <a href="{{ route('registro') }}">Registrate acá</a></p>
</div>