<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="generator" content="MODx">
    <title>Позитивчик))))- @yield('title')</title>
    
        
        <link rel="shortcut icon" type="image/png" href="favicon.png"/>

        
</head>
<body id="fon">
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Позитивчик))))<img  src="{{ secure_asset('images/happy.png') }}" class="hnavim" alt="" ></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="/"><i class="fas fa-home"></i></a>      
      <a class="nav-item nav-link" href="/portfolio">Портфолио</a>
      <a class="nav-item nav-link" href="/about">Кто я</a>
      <!-- <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
    </div>
  </div>
</nav>
</header>

<maine class="maine">
    @yield('content')
</maine>
<footer class="footer">
    <p>Создано с любовью morepozitiva!!!!&nbsp; {{ date('Y') }}</p>

</footer>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
$("head").append("<link rel='preload' href='css/style.css' as='style' />").append("<link rel='preload' href='css/fons.css' as='style' />").append("<link rel='preload' href='css/naviki.css' as='style' />").append('<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="preload" as="style" type="text/css">').append('<link rel="preload" as="style" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">').append('<link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">');
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
<script src="wow/wow.js"></script>
<script>
  new WOW().init();
</script>
</html>