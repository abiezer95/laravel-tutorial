@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{ url('usuarios/crear') }}">
    @csrf 
    {{-- usanmos @csrf para proteger nuestro form y post de ataques enemigos --}}
    {{-- esto agrega un input hidden con un token especial --}}
    {{-- ahora si se puede ir a post --}}
    name<input type="text" name='name' placeholder="name"> email
    <input type="email" name='email' placeholder="email" value={{ old('email') }}>pass
    <input type="password" name='password' placeholder="pass">
    <button type="submit">crear</button>
</form>