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

    <!-- Portfolio-->
    <section class="page-section bg-dark text-white" id="portfolio">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-20 text-center">
                    <h2 class="mt-0">Nuestros Restaurantes</h2>
                    <hr class="divider" />
                    <p class="text-muted mb-5">1.El Arreo: Es un restaurante que ofrece comida típica de la región y
                        mariscos frescos. Se encuentra en la calle 2 # 4-58.
                        <br>
                        2. Restaurante Bambú: Es un restaurante que ofrece una variedad de platos de mariscos, comida
                        típica y opciones vegetarianas. Se encuentra en la calle 4 # 4-47.
                        <br>
                        3.Restaurante La Bocana: Ofrece una gran variedad de platos de mariscos, arroces y sopas. Se
                        encuentra en la Avenida del Pacífico # 1-19.
                        <br>
                        4.La Fragata: Ofrece una gran variedad de platos de mariscos y comida típica de la región. Se
                        encuentra en la Calle Real # 6-13.
                        <br>
                        5.Restaurante Donde Chucho: Ofrece platos de mariscos y comida típica de la región. Se encuentra
                        en la calle 5 # 6-61.
                        <br>
                        6.Restaurante La Casa de la Langosta: Especializado en la preparación de langostas, este
                        restaurante ofrece una gran variedad de platos de mariscos y opciones vegetarianas. Se encuentra
                        en la calle 3 # 4-46.
                        <br>
                        7.Restaurante La Tropicana - Especializado en mariscos y comida típica de la región del
                        Pacífico.
                        Dirección: Carrera 4 # 7-68, Tumaco
                        <br>
                        8.Restaurante El Fogón - Ofrece platos de mariscos, comida criolla y opciones vegetarianas.
                        Dirección: Calle 10 # 6-33, Tumaco
                        <br>
                        9.Restaurante La Brasa - Especializado en comida a la parrilla, carnes y mariscos.
                        Dirección: Calle 6 # 7-20, Tumaco
                        <br>
                        10.Restaurante Mar Azul - Ofrece comida típica del Pacífico colombiano, con énfasis en platos de
                        mariscos y pescados.
                        Dirección: Carrera 2 # 9-16, Tumaco
                        <br>
                        11.Restaurante Puerto Rico - Especializado en comida típica del Pacífico colombiano y mariscos
                        frescos.
                        Dirección: Calle 10 # 5-55, Tumaco
                        <br>
                    </p>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center mb-5">

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
