<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Full Slider - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href={{ asset('vendor/bootstrap/css/bootstrap.min.css')}} rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href={{ asset('css/full-slider.css')}} rel="stylesheet">

    <style>
        .bg-white{
            transition: all 1s ease;
        }

        .bg-transparent{
            transition: all 1s ease;
        }
    </style>

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top font-weight-bold" id="menu">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img id="logo1" src="{{ asset('img/logo1.png')}}" width="200px" height="100px">
            <img id="logo2" src="{{ asset('img/LogoBlanco.png')}}" width="300px" height="100px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav ml-auto" style="font-size: large;">
                <li class="nav-item active">
                    <a class="nav-link" href="#inicio">Inicio
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gps">Rastreo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#features">Caracteristicas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#precios">Precios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Ingresar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Registrarse</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header id="inicio">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox" >
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url({{ asset('img/1.jpg')}})">
                <div class="carousel-caption d-none d-md-block"  >
                    <h3>First Slide</h3>
                    <p>This is a description for the first slide.</p>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url({{ asset('img/2.png')}})">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Second Slide</h3>
                    <p>This is a description for the second slide.</p>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url({{ asset('img/3.jpg')}})">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Third Slide</h3>
                    <p>This is a description for the third slide.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>



<!-- Page Content -->
<section>
    <div class="container">
        <div class="row" style="margin-top: 60px; margin-bottom: 40px">

            <div class="col-12 col-sm-6 col-md-3 text-center" style="padding-left: 0px; padding-right: 20px; margin-bottom: 20px">
                <img src="{{ asset('img/gps.png')}}" width="50px" height="35px">
                <h4>Ubicación en tiempo real</h4>
                <p>Conoce la ubicación exacta, movimientos y acciones que realiza cada unidad.</p>
                <hr width="70px" class="border-dark">
            </div>

            <div class="col-12 col-sm-6 col-md-3 text-center" style="padding-left: 20px; padding-right: 20px; margin-bottom: 20px">
                <img src="{{ asset('img/camion.png')}}" width="60px" height="40px">
                <h4>Gestión de transporte</h4>
                <p>Controla el inventario de tus unidades de transporte por categoría</p>
                <hr width="70px" class="border-dark">
            </div>

            <div class="col-12 col-sm-6 col-md-3 text-center" style="padding-left: 20px; padding-right: 20px; margin-bottom: 20px">
                <img src="{{ asset('img/reporte.png')}}" width="50px" height="40px">
                <h4>Reportes digitales</h4>
                <p>Podras generar reportes de la información de las caracteristicas que te ofrece la plataforma</p>
                <hr width="70px" class="border-dark">
            </div>

            <div class="col-12 col-sm-6 col-md-3 text-center" style="padding-left: 20px; padding-right: 20px; margin-bottom: 20px">
                <img src="{{ asset('img/usuarios.png')}}" width="50px" height="40px">
                <h4>Control de usuarios</h4>
                <p>Registra a tus usuarios categorizandolos por tipo y funciones</p>
                <hr width="70px" class="border-dark">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Innova Transport Pro.</h2>
                <h4>Somos una plataforma creada especialmente para todas aquellas empresas
                    destinadas al manejo de auto transportes de carga, brindando grandes
                    beneficios y seguridad para la administración de tus entregas.
                </h4>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <img src="{{ asset('img/camion1.png')}}" width="85%">
            </div>
            <div class="col-sm-6">
                <img src="{{ asset('img/Trailer.png')}}" width="100%">
            </div>
        </div>

    </div>


</section>
<section id="gps">
        <div class="row bg-dark text-center" style="padding-top: 20px; padding-bottom: 20px; width: 100%">
            <div class="col-sm-6 text-white">Registrate ahora con nosotros e incia tu prueba gratis de 14 días</div>
            <div class="col-sm-6"><button class="btn-light">Registrarse</button></div>
        </div>
</section>

<section>
    <div class="container" >
        <div class="row" style="margin-top: 50px; margin-bottom: 50px; padding-right: 50px; padding-left: 50px;">
            <div class="col-sm-12 text-center">
                <h2>Te ofrecemos:</h2>
                <p>Multiples funciones de uso para llevar un control total de tus
                unidades de transporte, clientes, salidas y llegadas.Contamos con tecnología
                de rastreo en tiempo real mediante GPS para conocer cada uno de los movimientos
                realizados por sus operadores en su respectiva unidad. A demas de una vista
                agradable, intuitiva y facil de usar.</p>

            </div>
        </div>

        <div class="row text-left" style="background-image: url({{ asset('img/cel1.png')}}); background-repeat: no-repeat;  padding-top: 200px; padding-bottom: 50px;">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6" style="height: 550px;"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">

                <h2>Ubica tu cargamento en todo momento</h2>
                <ul>
                    <li>Conoce el lugar exacto en el que se encuentra tu cargamento en tiempo real.</li>
                    <li>Verifica el nombre del operador encargado de tu cargamento.</li>
                    <li>Visualiza cada uno de los movimientos realizados durante la ruta del operador.</li>
                    <li>Revisa si tu cargamento va a corde al tiempo estimado.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row"  style="background-image: url({{ asset('img/central.png')}}); height: 600px;">

    </div>

<div class="container" id="features" style="margin-top: -100PX;">

    <div class="row text-center">
        <div class="row" style="margin-top: 200px; margin-bottom: 40px">

            <div class="col-12 col-sm-6 col-md-3 text-center" style="padding-left: 20px; padding-right: 20px; margin-bottom: 20px">
                <img src="{{ asset('img/usuarios.png')}}" width="50px" height="40px">
                <h4>Control de usuarios</h4>
                <p>Registra a tus usuarios categorizandolos por tipo y funciones</p>
                <hr width="70px" class="border-dark">
            </div>

            <div class="col-12 col-sm-6 col-md-3 text-center" style="padding-left: 20px; padding-right: 20px; margin-bottom: 20px">
                <img src="{{ asset('img/camion.png')}}" width="60px" height="40px">
                <h4>Gestión de transporte</h4>
                <p>Controla el inventario de tus unidades de transporte por categoría</p>
                <hr width="70px" class="border-dark">
            </div>

            <div class="col-12 col-sm-6 col-md-3 text-center" style="padding-left: 0px; padding-right: 20px; margin-bottom: 20px">
                <img src="{{ asset('img/gps.png')}}" width="50px" height="35px">
                <h4>Rendimiento de transporte</h4>
                <p>Conoce el rendimiento de cada unidad de transporte mediante la estimación de recorrido y el consumo de litros.</p>
                <hr width="70px" class="border-dark">
            </div>



            <div class="col-12 col-sm-6 col-md-3 text-center" style="padding-left: 20px; padding-right: 20px; margin-bottom: 20px">
                <img src="{{ asset('img/reporte.png')}}" width="50px" height="40px">
                <h4>Mantenimiento de transporte</h4>
                <p>Conoce información de tus unidades de transporte en proceso de mantenimietno generando un reporte digital.</p>
                <hr width="70px" class="border-dark">
            </div>



            <div class="col-12 col-sm-6 col-md-3 text-center" style="padding-left: 0px; padding-right: 20px; margin-bottom: 20px">
                <img src="{{ asset('img/gps.png')}}" width="50px" height="35px">
                <h4>Ubicación en tiempo real</h4>
                <p>Conoce la ubicación exacta, movimientos y acciones que realiza cada unidad.</p>
                <hr width="70px" class="border-dark">
            </div>

            <div class="col-12 col-sm-6 col-md-3 text-center" style="padding-left: 20px; padding-right: 20px; margin-bottom: 20px">
                <img src="{{ asset('img/camion.png')}}" width="60px" height="40px">
                <h4>Asignación de salidas</h4>
                <p>Registra nuevas salidas o viajes a tus unidades de transporte y asignaas a alguno de tus operadores, llevando un control por fechas</p>
                <hr width="70px" class="border-dark">
            </div>

            <div class="col-12 col-sm-6 col-md-3 text-center" style="padding-left: 20px; padding-right: 20px; margin-bottom: 20px">
                <img src="{{ asset('img/reporte.png')}}" width="50px" height="40px">
                <h4>Control de clientes</h4>
                <p>Controla el registro de tus clientes para darles acceso a la apicación y permitirles observar que pasa con su carga</p>
                <hr width="70px" class="border-dark">
            </div>

            <div class="col-12 col-sm-6 col-md-3 text-center" style="padding-left: 20px; padding-right: 20px; margin-bottom: 20px">
                <img src="{{ asset('img/usuarios.png')}}" width="50px" height="40px">
                <h4>Gestión de viaticos</h4>
                <p>Conoce los gastos que genera la unidad de transporte en cada salida asignada incluyendo gasolina, casetas y gastos de operadores.</p>
                <hr width="70px" class="border-dark">
            </div>

            <div class="col-12 col-sm-6 col-md-3 text-center" style="padding-left: 20px; padding-right: 20px; margin-bottom: 20px">
                <img src="{{ asset('img/camion.png')}}" width="60px" height="40px">
                <h4>Facturación</h4>
                <p>Solicita tu factura con nosotros</p>
                <hr width="70px" class="border-dark">
            </div>

            <div class="col-12 col-sm-6 col-md-3 text-center" style="padding-left: 20px; padding-right: 20px; margin-bottom: 20px">
                <img src="{{ asset('img/usuarios.png')}}" width="50px" height="40px">
                <h4>Gestión de casetas</h4>
                <p>Podras conocer el número de casetas que hay durante el recorrido y el total de pago según las caracteristicas de cada unidad.</p>
                <hr width="70px" class="border-dark">
            </div>

            <div class="col-12 col-sm-6 col-md-3 text-center" style="padding-left: 20px; padding-right: 20px; margin-bottom: 20px">
                <img src="{{ asset('img/reporte.png')}}" width="50px" height="40px">
                <h4>Reportes digitales</h4>
                <p>Podras generar reportes de la información de las caracteristicas que te ofrece la plataforma</p>
                <hr width="70px" class="border-dark">
            </div>

        </div>

    </div>

</div>

<div class="container-fluid" id="precios">
    <div class="row text-center bg-light" style="padding-left: 200px; padding-right: 200px; padding-top: 50px;">

        <div class="col-md-12" style="color: gray; font-size: x-large;">
            <h2>Precios</h2>
            <p>Registrate con nosotros y solicita el plan que necesites para tu empresa.</p>
        </div>


        <div class="col-md-4" style="padding-left: 40px; padding-right: 40px; padding-bottom: 40px; padding-top: 40px;">
            <div class="bg-dark col-md-12 text-white"><h2>$ 240.00/Mes</h2></div>
            <div class="bg-white col-md-12">
                <h4>Todas las caracteristicas</h4><br>
                <h3>1 Unidad</h3>
                <img src="{{ asset('img/camion2.png')}}">
                <button class="bg-dark btn text-white" style="margin-bottom: 40px;">Comprar ya</button>
            </div>
        </div>

        <div class="col-md-4" style="padding-left: 40px; padding-right: 40px; padding-bottom: 40px; padding-top: 40px;">
            <div class="bg-dark col-md-12 text-white"><h2>$ 224.10/Mes</h2></div>
            <div class="bg-white col-md-12">
                <h4>Todas las caracteristicas</h4><br>
                <h3>5 Unidades</h3>
                <img src="{{ asset('img/camion2.png')}}">
                <button class="bg-dark btn text-white" style="margin-bottom: 40px;">Comprar ya</button>
            </div>
        </div>

        <div class="col-md-4" style="padding-left: 40px; padding-right: 40px; padding-bottom: 40px; padding-top: 40px;">
            <div class="bg-dark col-md-12 text-white"><h2>$ 162.85/Mes</h2></div>
            <div class="bg-white col-md-12">
                <h4>Todas las caracteristicas</h4><br>
                <h3>10 Unidades</h3>
                <img src="{{ asset('img/camion2.png')}}">
                <button class="bg-dark btn text-white" style="margin-bottom: 40px;">Comprar ya</button>
            </div>
        </div>
    </div>

</div>

</section>







<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container ">
        <p class="m-0 text-center text-white">Acerca de nosotros | Terminos & Condiciones | Politica de privacidad</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function () {
        $("#logo1").hide();
        $("#logo2").show();
    });

    $(window).scroll(function() {
        if ($("#menu").offset().top > 56) {
            $("#menu").addClass("bg-white");
            $("#menu").removeClass("bg-transparent");
            $("#menu").removeClass("navbar-dark");
            $("#menu").addClass("navbar-light");
            $("#logo2").hide();
            $("#logo1").show();
        } else {
            $("#menu").removeClass("bg-white");
            $("#menu").addClass("bg-transparent");
            $("#menu").addClass("navbar-dark");
            $("#menu").removeClass("navbar-light");
            $("#logo1").hide();
            $("#logo2").show();
        }
    });
</script>

</body>

</html>
