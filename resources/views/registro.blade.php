<div class="register-container">
    <h2>Crear Cuenta</h2>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('registro') }}" method="POST">
        @csrf 

        <div>
            <label>Nombre Completo:</label>
            <input type="text" name="name" value="{{ old('name') }}" required placeholder="Tu nombre">
        </div>

        <div>
            <label>Correo Electrónico:</label>
            <input type="email" name="email" value="{{ old('email') }}" required placeholder="ejemplo@mail.com">
        </div>

        <div>
            <label>Contraseña (Mínimo 6 caracteres):</label>
            <input type="password" name="password" required placeholder="******">
        </div>

        <div>
            <label>Confirmar Contraseña:</label>
            <input type="password" name="password_confirmation" required placeholder="******">
        </div>

        <button type="submit">Registrarse</button>
    </form>

    <p>¿Ya tenés cuenta? <a href="{{ route('login') }}">Iniciá sesión acá</a></p>
</div>