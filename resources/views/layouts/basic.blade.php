<!DOCTYPE html>
<html lang="es">
  <head>
    <base href="/"/>
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106089812-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-106089812-1');
    </script>
    <!-- ends Google Analytics -->
    <meta charset="utf-8">

    <title>Vital Army</title>
    <link rel="canonical" href="">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../../favicon.ico?v=2">
    

    <!-- SEO  -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="José Roberto Orozco Avilés">
    <meta name="copyright" content="© VitalArmy {{date('Y')}} Todos los derechos reservados.">
    <meta name="robots" content="index, follow">
    <meta name="email" content="ventas@vitalarmy.com">
    <meta name="description" content="Distribuidora mexicana de textiles, playeras, hoodies, tops, polos de las mejores marcas a nivel nacional.">
    <meta name="keywords" content="publicidad, playeras para sublimar, playeras baratas, playeras para campaña, playeras serigrafía, playeras lisas, jaspeadas, compra de playeras, diseño publicitario, playeras al mayoreo">

    <!--  Facebook Open Graph -->
    <meta property="og:url"           content="https://www.vitalarmy.com" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Vital Army" />
    <meta property="og:description"   content="Distribuidora mexicana de textiles, playeras, hoodies, tops, polos de las mejores marcas a nivel nacional." />
    <meta property="og:image"         content="https://www.vitalarmy.com/resources/images/og_va.png" />



    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Estilos principales del sitio -->
    <link rel="stylesheet" href="{{URL::asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/Navigation-with-Button.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/Footer-Clean.css')}}">
    
  </head>

  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean-button">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="img-fluid" src="{{URL::asset('images/logo.png')}}" width="180">
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                <span class="sr-only">Navegación</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto ">
                    <li class="nav-item @if(isset($pedidos)) active @endif" role="presentation">
                        <a class="nav-link" href="{{route('pedidos')}}">Pedidos</a>
                    </li>
                    <li class="nav-item {{(Request::route()->getName() == 'pedidos.agregar') ? 'active' : ''}}" role="presentation">
                        <a class="nav-link" href="{{route('pedidos.agregar')}}">Agregrar</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="carrito">Carrito</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Perfil</a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" role="presentation" href="usuario/ver">Mi perfil</a>
                            <a class="dropdown-item" role="presentation" href="pedidos">Pedidos</a>
                            <a class="dropdown-item" role="presentation" href="" id="logoutPerfil">Cerrar sesión</a>
                        </div>
                    </li>
                </ul>
                <span class="navbar-text actions">
                    <a href="" class="login">Iniciar sesión</a>
                    <a class="btn btn-light action-button" role="button" href="" style="background-color:#f77f00;">Registrarse</a>
                </span>
            </div>
       </div>
    </nav>
    <!-- ends navbar -->

    <!-- Contenido del sitio -->
    @yield('contenido')
    <!-- ends contenido del sitio -->


    <div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Productos </h3>
                        <ul>
                            <li><a href="#">Todos </a></li>
                            <li><a href="#">Playeras </a></li>
                            <li><a href="#">Hoodies </a></li>
                            <li><a href="#">Polos </a></li>
                            <li><a href="#">Sudaderas </a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Nosotros </h3>
                        <ul>
                            <li><a href="#">Compañía </a></li>
                            <li><a href="#">Equipo </a></li>
                            <li><a href="https://www.joystick.com.mx">Diseñado por Joystick</a></li>
                            <li><a href="admin">Administración</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Rastreo </h3>
                        <ul>
                            <li><a href="http://www.dhl.com.mx/es/express/rastreo.html" target="_blank">DHL </a></li>
                            <li><a href="http://www.fedex.com/mx/track/" target="_blank">FedEx </a></li>
                            <li><a href="http://www.redpack.com.mx/rastreo-de-envios/" target="_blank">Redpack </a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social"><a href="https://www.facebook.com/VitalArmy" target="_blank"><i class="fa fa-facebook"></i></a><a href="whatsapp://send?text=Hello%2C%20World!"><i class="fa fa-whatsapp"></i></a><a href="mailto:ventas@vitalarmy.com"
                        target="_blank"><i class="fa fa-envelope" style="font-size:26;"></i></a>
                        <p class="copyright">Vital Army © {{date("Y")}}</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
