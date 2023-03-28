<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Fonte do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- CSS da Aplicação -->
    <link rel="stylesheet" href="/css/estilos.css">
    <script src="/js/script.js"></script>

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="/">
                <img src="/img/.trashed-1677442275-client-2.png" alt="">
            </a>

            <div class="collapse navbar-collapse" id="navbar">
              <ul class="navbar-nav">
                <li class="nav-item ">
                  <a class="nav-link" href="/">Eventos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/events/create">Criar Eventos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Entrar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Cadastrar</a>
                </li>
              </ul>
            </div>
          </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                @if (session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
        </div>
    </main>

<footer>
    <p>Aula Laravel &copy;2023</p>
</footer>
</body>
</html>
