<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        Consultas Eloquent
        <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <li>
            <a href="{{ route('all') }}">
                Todos los usuarios (ALL)
            </a>
        </li>
        <li>
            <a href="{{ route('get', 'f') }}">
                Lista de usuarios Femenino
            </a>
        </li> 
        <li>
            <a href="{{ route('get', 'm') }}">
                Lista de usuarios Masculino
            </a>
        </li> 
        <li>
            <a href="{{ route('get-custom') }}">
                Lista de usuarios Get con Array
            </a>
        </li> 
        <li>
            <a href="{{ route('lists') }}">
                 Lista de usuario para Select (LISTS)
            </a>
        </li> 
        <li>
            <a href="{{ route('first-last') }}">
                 Primero y Ultimo Registro 
            </a>
        </li>  
        
    </ul>
</li>

