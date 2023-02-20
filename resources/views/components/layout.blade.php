<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    @vite(['resources/sass/app.scss','resources/js/app.js' ])
    
</head>

<body>
@if( $rota == 'Nova Rota')
    Nova Rota

    <div class="container mt-4">

    <button class="btn btn-info">   <a href="/welcome">Welcome</a>    </button>
    
    <button class="btn btn-info">   <a href="/">Listar Máquinas</a>    </button>


</div>

@elseif ($rota == 'Rota Raiz')
     Rota Raiz

    <div class="container mt-4">

    <button class="btn btn-info">   <a href="/welcome">Welcome</a>    </button>
    </button> <button class="btn btn-info">    <a href="/listar-nova">Nova Listagem</a>     </button>

    </div>

@endif



</div>
    {{ $slot }}

</body>

</html>