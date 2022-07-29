<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vista - @yield('title') </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="resources\css\app.css">
  </head>
  <body>

<!-- Header -->

@section('header')
<nav class="grey darken-4">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo right">Logo</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="sass.html">Inicio</a></li>
        <li><a href="badges.html">Sucursales</a></li>
        <li><a href="collapsible.html">Productos</a></li>
        <li><a href="collapsible.html">Login</a></li>
      </ul>
    </div>
  </nav>
@show


<br>
<!-- Body -->
<div class="container">
    @yield('content')
</div>
<!-- Footer -->

@section('footer')
    
<footer class="page-footer grey darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">Copyright © 2019 Pollos Hermanos -
                           Términos y Condiciones | Seguridad y Privacidad | Código de ética</p>
              </div>
             
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
           
            </div>
          </div>
        </footer>


@show


  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  </body>
</html>