<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">CS</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#">Início <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sobre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{URL::to('/projetos')}}">Projetos</a>
            </li>
        </ul>
    </div>
</nav>
<div class="section">
    <center>
        <h1 class="mt-5 display-1">CS</h1>
        <p>Carlos Santos</p>
    </center>
</div>
<div class="container-fluid mt-5">
    @yield('content')   
</div>
</div>
</body>
</html>
