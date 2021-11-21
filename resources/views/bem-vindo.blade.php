Site

@auth

    <h1>Usuario autenticado</h1>
    <p>Nome {{Auth::user()->name}}</p>

@endauth

@guest

    <h1>Olá visitante</h1>

@endguest
