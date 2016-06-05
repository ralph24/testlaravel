<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Laravel Eloquent ORM</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <style>
            
            margin-top:50px;
        </style>
    
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <a href="{{ route('home') }}" class="navbar-brand">Eloquent ORM</a>
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
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
                        </ul>
                    </li>
                </ul>
            </div>
            
        </nav>

  
        @yield('content')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </body>
</html>
