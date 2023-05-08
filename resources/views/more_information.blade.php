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



    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">"¡Disfruten de nuestras deliciosas creaciones y hagan sus propios Food
                        Wishes con nosotros!"</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4">¡Nos encanta que nuestros clientes disfruten de nuestras deliciosas
                        creaciones! En Nuestros Restaurantes, nuestro objetivo es ofrecer una experiencia gastronómica
                        excepcional que satisfaga todos los paladares. Queremos que nuestros clientes se sientan
                        inspirados por nuestra comida y que se atrevan a hacer sus propios "Food Wishes" en casa.
                        Nuestro equipo de chefs altamente capacitados trabaja incansablemente para crear nuevos y
                        emocionantes platos que sorprendan a nuestros clientes en cada visita. Utilizamos ingredientes
                        frescos y locales en cada uno de nuestros platos, lo que garantiza el mejor sabor y calidad en
                        cada bocado.
                        Además, en Nuestros Restaurantes, nos enorgullece ofrecer una amplia variedad de opciones de
                        menú para satisfacer todas las necesidades y preferencias dietéticas. Desde platos vegetarianos
                        y veganos hasta opciones sin gluten y más, tenemos algo para todos.
                        ¡Así que adelante, disfruten de nuestras deliciosas creaciones y hagan sus propios Food Wishes
                        con nosotros! Estamos emocionados de ser parte de su experiencia gastronómica y esperamos verte
                        pronto en uno de nuestros restaurantes. </p>
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
