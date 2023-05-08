<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Food Wishes - ¡Bienvenidos a nuestros restaurantes!
    </title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles-index.css') }}" rel="stylesheet" />
    <!-- My styles -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a href="{{ route('index') }}" class="brand-link brand-logo">
                <img class="img-logo" src="{{ asset('img/food_wishes2.png') }}" alt="Food Wishes">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('mision') }}">Misión</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('what_do_we') }}">Qué hacemos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('our_restaurants') }}">Nuestros
                            Restaurantes</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Iniciar Sesion</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Qué hacemos!</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-heart-pulse"></i></div>
                        <h3 class="h4 mb-2">Comida Saludable</h3>
                        <p class="text-muted mb-0">Nos dedicamos a utilizar los ingredientes más frescos y locales en
                            cada uno de nuestros platos,
                            lo que garantiza el mejor sabor y calidad en cada bocado. Además, nuestro equipo de chefs
                            altamente capacitados trabaja
                            incansablemente para crear nuevos y emocionantes platos que sorprendan a nuestros clientes
                            en cada visita.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-basket"></i></div>
                        <h3 class="h4 mb-2">Primera Calidad</h3>
                        <p class="text-muted mb-0">En Nuestros Restaurantes, también nos esforzamos por ofrecer un
                            servicio excepcional
                            a cada uno de nuestros clientes. Desde el momento en que entras por la puerta, nuestro
                            personal amable y profesional
                            te hace sentir bienvenido y te brinda una atención personalizada para asegurarse de que tu
                            experiencia sea inolvidable.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-egg-fill"></i></div>
                        <h3 class="h4 mb-2">Mejores Restaurantes</h3>
                        <p class="text-muted mb-0">Nuestra deliciosa comida y excelente servicio,
                            también nos enorgullecemos de ofrecer una amplia selección de bebidas.
                            Desde vinos cuidadosamente seleccionados hasta cócteles artesanales y cervezas locales,
                            nuestro equipo de mixólogos trabaja incansablemente para crear bebidas innovadoras y
                            emocionantes que complementen perfectamente cada uno de nuestros platos.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-egg-fried"></i></i></div>
                        <h3 class="h4 mb-2">Platos Unicos</h3>
                        <p class="text-muted mb-0">Estamos comprometidos con la excelencia en todo lo que hacemos.
                            Ya sea que estés buscando una cena romántica, una reunión con amigos o una comida de
                            negocios,
                            estamos seguros de que disfrutarás de una experiencia culinaria excepcional en uno de
                            nuestros restaurantes.
                            Ven a visitarnos y deja que nuestro equipo te muestre lo que podemos hacer.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">Copyright &copy; 2023 - Food Wishes</div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts-index.js') }}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
