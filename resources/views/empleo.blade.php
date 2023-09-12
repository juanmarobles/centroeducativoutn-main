
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Centro Educativo - Empleo</title>
        <!-- Swipper CSS-->
        <link rel="stylesheet" href="css/swiper-bundle.min.css">

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

        <!-- Google fonts-->    
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />

        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="css/normalize.css">
        <link href="css/styles.css" rel="stylesheet" />
    </head>

    <body id="page-top">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        <%
            HttpSession misession = request.getSession();
            String usuario = (String) request.getSession().getAttribute("email");
            boolean usuarioAutenticado = (usuario != null);
        %>
        <script>
            var usuarioAutenticado = <%= usuarioAutenticado%>;
        </script>
        <!-- Navigation-->
        <!-- Navigation-->
        <nav class="navbar nav-bg navbar-expand-lg text-uppercase fixed-top" id="mainNav">
            <a class="navbar-brand" href="#page-top">
                <img class="navbar-logo" src="assets/img/portfolio/logo_blanco.png" alt="..." />
            </a>
            <button class="navbar-toggler text-uppercase font-weight-bold text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse navigation navbar-nav ms-auto" id="navbarResponsive">                
            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('indexinvitado') }}#QuienesSomos">Quienes somos</a>
                <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('indexinvitado') }}#NivelesEducativos">Niveles Educativos</a>
                <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('indexinvitado') }}#noticias">Noticias</a>
                <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('comentarios') }}">Comentarios</a>
                <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('indexinvitado') }}#BienEstarEstudiantil">Bienestar Estudiantil</a>
                <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('indexinvitado') }}#Inscripcion">Inscripcion</a>
                <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('empleo') }}">Empleo</a>
                <div class="topbar-divider d-none d-sm-block"></div>
                <!-- Aquí puedes insertar el código del menú de usuario adaptado -->
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('login') }}" id="loginButton">Login</a>
                </li>

                <!-- Fin del menú de usuario -->
            </div>        
        </nav>


        <!-- Contact Section-->
        <section class="page-section" id="inscripcion">
            <div class="contenedor-contenido">
                <!-- Contact Section Heading-->
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-ballpen" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M14 6l7 7l-4 4" />
                    <path d="M5.828 18.172a2.828 2.828 0 0 0 4 0l10.586 -10.586a2 2 0 0 0 0 -2.829l-1.171 -1.171a2 2 0 0 0 -2.829 0l-10.586 10.586a2.828 2.828 0 0 0 0 4z" />
                    <path d="M4 20l1.768 -1.768" />
                    </svg>
                    <div class="divider-custom-line"></div>
                </div>
                <h1 class="page-section-heading text-center text-uppercase text-secondary mb-0">Formulario de empleo</h1>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-ballpen" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M14 6l7 7l-4 4" />
                    <path d="M5.828 18.172a2.828 2.828 0 0 0 4 0l10.586 -10.586a2 2 0 0 0 0 -2.829l-1.171 -1.171a2 2 0 0 0 -2.829 0l-10.586 10.586a2.828 2.828 0 0 0 0 4z" />
                    <path d="M4 20l1.768 -1.768" />
                    </svg>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form action="{{ route('procesar.formularioempleo') }}" method="POST" id="contactForm">
                            @csrf
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="nombre" id="nombre" type="text" placeholder="Ingrese su nombre..." data-sb-validations="required" />
                                <label for="name">Nombre y Apellido</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="email" id="email" type="email" placeholder="nombre@example.com" data-sb-validations="required,email" />
                                <label for="email">Email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>

                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="cel" id="phone" type="tel" placeholder="(362) 456-7890" data-sb-validations="required" />
                                <label for="phone">Telefono</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!-- Asunto input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="asunto" id="asunto" type="text" placeholder="..." data-sb-validations="required" />
                                <label for="email">Asunto</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Complete un asunto</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Asunto no valido</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="mje" id="message" type="text" placeholder="Deje su mensaje aqui..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Mensaje</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Inscripcion enviada</div>
                                    <br /></div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>




        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Direccion</h4>
                        <p class="lead mb-0">
                            Avenida Paraguay 747
                            <br />
                        </p>
                    </div>

                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Contactanos</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>

                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Nosotros</h4>
                        <p class="lead mb-0">
                            Gatti, Luciano - Daciuk, Paulina - Robles, Juan Manuel
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Educar Para Transformar 2023</small></div>
        </div>
        <!-- Portfolio Modals-->

        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="contenedor-contenido">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Educacaion Inicial</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-backpack" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M5 18v-6a6 6 0 0 1 6 -6h2a6 6 0 0 1 6 6v6a3 3 0 0 1 -3 3h-8a3 3 0 0 1 -3 -3z" />
                                        <path d="M10 6v-1a2 2 0 1 1 4 0v1" />
                                        <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
                                        <path d="M11 10h2" />
                                        </svg>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <section class="carousel-ne niveles-educativos-imagenes">
                                        <div class="carousel-list" id="carousel-id">
                                            <button class="carrusel-arrow carrusel-prev" id="button-prev" data-button="button-prev"
                                                    onclick="app.processingButton(event)">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
                                                     class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 320 512">
                                                <path fill="currentColor"
                                                      d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                                                </path>
                                                </svg>
                                            </button>  
                                            <div class="carousel-track" id="track">
                                                <div class="carousel">
                                                    <img src="assets/img/NIVEL_INICIAL/EDUCACION_INICIAL_I.jpg" alt="..">   
                                                </div>
                                                <div class="carousel">
                                                    <img src="assets/img/NIVEL_INICIAL/EDUCACION_INICIAL_II.jpg" alt="">
                                                </div>
                                                <div class="carousel">
                                                    <img src="assets/img/NIVEL_INICIAL/EDUCACION_INICIAL_III.jpg" alt="">
                                                </div>
                                                <div class="carousel">
                                                    <img src="assets/img/NIVEL_INICIAL/EDUCACION_INICIAL_IV.jpg" alt="">
                                                </div>
                                                <div class="carousel">
                                                    <img src="assets/img/NIVEL_INICIAL/EDUCACION_INICIAL_V.jpg" alt="">
                                                </div>
                                                <div class="carousel">
                                                    <img src="assets/img/NIVEL_INICIAL/EDUCACION_INICIAL_VI.jpg" alt="">
                                                </div>
                                                <div class="carousel">
                                                    <img src="assets/img/NIVEL_INICIAL/EDUCACION_INICIAL_VII.jpg" alt="">
                                                </div>
                                                <div class="carousel">
                                                    <img src="assets/img/NIVEL_INICIAL/EDUCACION_INICIAL_VIII .jpg" alt="">
                                                </div>
                                                <div class="carousel">
                                                    <img src="assets/img/NIVEL_INICIAL/EDUCACION_INICIAL_IX.jpg" alt="">
                                                </div>
                                                <div class="carousel">
                                                    <img src="assets/img/NIVEL_INICIAL/EDUCACION_INICIAL_X.jpg" alt="">
                                                </div>
                                            </div>
                                            <button class="carrusel-arrow carrusel-next" id="button-next" data-button="button-next"
                                                    onclick="app.processingButton(event)">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                                                     class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 320 512">
                                                <path fill="currentColor"
                                                      d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                                                </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </section>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Educacion Primaria</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-backpack" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M5 18v-6a6 6 0 0 1 6 -6h2a6 6 0 0 1 6 6v6a3 3 0 0 1 -3 3h-8a3 3 0 0 1 -3 -3z" />
                                        <path d="M10 6v-1a2 2 0 1 1 4 0v1" />
                                        <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
                                        <path d="M11 10h2" />
                                        </svg>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <section class="carousel-ne niveles-educativos-imagenes">
                                        <div class="carousel-list" id="carousel-id">
                                            <button class="carrusel-arrow carrusel-prev" id="button-prev" data-button="button-prev"
                                                    onclick="app.processingButton(event)">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
                                                     class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 320 512">
                                                <path fill="currentColor"
                                                      d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                                                </path>
                                                </svg>
                                            </button>  
                                            <div class="carousel-track" id="track">
                                                <div class="carousel">  
                                                    <img src="assets/img/NIVEL_PRIMARIO/EDUCACION_PRIMARIA_I.jpg" alt="..">
                                                </div>
                                                <div class="carousel">
                                                    <img src="assets/img/NIVEL_PRIMARIO/EDUCACION_PRIMARIA_II.jpg" alt="">
                                                </div>
                                                <div class="carousel">
                                                    <img src="assets/img/NIVEL_PRIMARIO/EDUCACION_PRIMARIA_III.jpg" alt="">
                                                </div>
                                                <div class="carousel">
                                                    <img src="assets/img/NIVEL_PRIMARIO/EDUCACION_PRIMARIA_IV.jpg" alt="">
                                                </div>
                                                <div class="carousel">
                                                    <img src="assets/img/NIVEL_PRIMARIO/EDUCACION_PRIMARIA_V.jpg" alt="">
                                                </div>
                                                <div class="carousel">
                                                    <img src="assets/img/NIVEL_PRIMARIO/EDUCACION_PRIMARIA_VI.jpg" alt="">
                                                </div>
                                                <div class="carousel">
                                                    <img src="assets/img/NIVEL_PRIMARIO/EDUCACION_PRIMARIA_VII.jpg" alt="">
                                                </div>
                                                <div class="carousel">
                                                    <img src="assets/img/NIVEL_PRIMARIO/EDUCACION_PRIMARIA_IX.jpg" alt="">
                                                </div>
                                                <div class="carousel">
                                                    <img src="assets/img/NIVEL_PRIMARIO/EDUCACION_PRIMARIA_VIII.jpg" alt="">
                                                </div>
                                                <div class="carousel">
                                                    <img src="assets/img/NIVEL_PRIMARIO/EDUCACION_PRIMARIA_X.jpg" alt="">
                                                </div>
                                            </div>
                                            <button class="carrusel-arrow carrusel-next" id="button-next" data-button="button-next"
                                                    onclick="app.processingButton(event)">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                                                     class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 320 512">
                                                <path fill="currentColor"
                                                      d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                                                </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </section>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>                                       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Educacion Secundaria</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-backpack" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M5 18v-6a6 6 0 0 1 6 -6h2a6 6 0 0 1 6 6v6a3 3 0 0 1 -3 3h-8a3 3 0 0 1 -3 -3z" />
                                        <path d="M10 6v-1a2 2 0 1 1 4 0v1" />
                                        <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
                                        <path d="M11 10h2" />
                                        </svg>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <section class="carousel-ne niveles-educativos-imagenes">
                                        <div class="carousel-list" id="carousel-id">
                                            <button class="carrusel-arrow carrusel-prev" id="button-prev" data-button="button-prev"
                                                    onclick="app.processingButton(event)">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
                                                     class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 320 512">
                                                <path fill="currentColor"
                                                      d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                                                </path>
                                                </svg>
                                            </button>  
                                            <div class="carousel-track" id="track">
                                                <div class="carousel">  
                                                    <img src="assets/img/NIVEL_SECUNDARIO/EDUCACION_SECUNDARIA_I.jpg" alt="..">
                                                </div>
                                                <div class="carousel">
                                                    <img src="assets/img/NIVEL_SECUNDARIO/EDUCACION_SECUNDARIA_II.jpg" alt="">
                                                </div>
                                                <div class="carousel">
                                                    <img src="assets/img/NIVEL_SECUNDARIO/EDUCACION_SECUNDARIA_III.jpg" alt="">
                                                </div>
                                                <div class="carousel">
                                                    <img src="assets/img/NIVEL_SECUNDARIO/EDUCACION_SECUNDARIA_IV.jpg" alt="">
                                                </div>
                                                <div class="carousel">
                                                    <img src="assets/img/NIVEL_SECUNDARIO/EDUCACION_SECUNDARIA_V.jpg" alt="">
                                                </div>
                                                <div class="carousel">
                                                    <img src="assets/img/NIVEL_SECUNDARIO/EDUCACION_SECUNDARIA_VI.jpg" alt="">
                                                </div>
                                                <div class="carousel">
                                                    <img src="assets/img/NIVEL_SECUNDARIO/EDUCACION_SECUNDARIA_VII.jpg" alt="">
                                                </div>
                                                <div class="carousel">
                                                    <img src="assets/img/NIVEL_SECUNDARIO/EDUCACION_SECUNDARIA_VIII.jpg" alt="">
                                                </div>
                                                <div class="carousel">
                                                    <img src="assets/img/NIVEL_SECUNDARIO/EDUCACION_SECUNDARIA_IX.jpg" alt="">
                                                </div>
                                                <div class="carousel">
                                                    <img src="assets/img/NIVEL_SECUNDARIO/EDUCACION_SECUNDARIA_X.jpg" alt="">
                                                </div>
                                                <div class="carousel">
                                                    <img src="assets/img/NIVEL_SECUNDARIO/EDUCACION_SECUNDARIA_XI.jpg" alt="">
                                                </div>
                                            </div>
                                            <button class="carrusel-arrow carrusel-next" id="button-next" data-button="button-next"
                                                    onclick="app.processingButton(event)">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                                                     class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 320 512">
                                                <path fill="currentColor"
                                                      d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                                                </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </section>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>           
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Controller</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/game.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Locked Safe</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/safe.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Submarine</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/submarine.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Swiper JS-->
        <script src="js/swiper-bundle.min.js"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>