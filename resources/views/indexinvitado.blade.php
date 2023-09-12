<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Centro Educativo</title>
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
        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <script>
    // Verificar si la variable de éxito está presente
    @if(session('success'))
        // Mostrar el mensaje de éxito
        document.getElementById('success-message').style.display = 'block';
    @endif
</script>

    </head>

    <body id="page-top">

        <%
            HttpSession misession = request.getSession();
            String usuario = (String) request.getSession().getAttribute("email");
            boolean usuarioAutenticado = (usuario != null);
        %>
  

        <script>
            var usuarioAutenticado = <%= usuarioAutenticado%>;
        </script>

<div id="success-message" class="alert alert-success" style="display: none;">
    El formulario se envió con éxito.
</div>



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
                <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#QuienesSomos">Quienes Somos</a>
                <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#NivelesEducativos">Niveles Educativos</a>
                <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#Noticias">Noticias</a>
                <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#BienEstarEstudiantil">Bienestar Estudiantil</a>
                <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#Inscripcion">Inscripcion</a>
                <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('comentarios') }}">Comentarios</a>
                <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('empleo') }}">Empleo</a>
                <div class="topbar-divider d-none d-sm-block"></div>
                <!-- Aquí puedes insertar el código del menú de usuario adaptado -->
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('login') }}" id="loginButton">Login</a>

                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#" onclick="confirmLogout()" style="background: none; display: none;" id="logoutButton">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>

                    </div>


                </li>

                <!-- Fin del menú de usuario -->
            </div>        
        </nav>

        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">  
            <div class="container d-flex align-items-center flex-column" id="about">
                <div class="img-header">
                    <img class="img-fluid" src="assets/img/portfolio/logo_color.png" alt="..." />
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-normal mb-0 txt-black">
                    Inspiramos, desafiamos y empoderamos a todos 
                    nuestros alumnos
                    a ser miembros comprometidos y éticos de una 
                    comunidad global,
                    para que se conviertan en
                    agentes de cambio conscientes de sí 
                    mismos, seguros, innovadores y colaborativos. 
                </p>         
            </div>
        </header>

        <Main>
            <!-- Quienes Somos Section-->
            <section class="page-section portfolio" id="QuienesSomos">
                <div class="contenedor-contenido">
                    <!-- Portfolio Section Heading-->
                    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Quienes Somos</h2>
                    <div class="divider-custom">
                        <div class="divider-custom-line"></div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-text" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                        <path d="M9 9l1 0" />
                        <path d="M9 13l6 0" />
                        <path d="M9 17l6 0" />
                        </svg>
                        <div class="divider-custom-line"></div>
                    </div>  
                    <div class="nosotros">
                        <div class="nosotros__contenido">
                            <p class="masthead-subheading font-weight-normal">Somos "Educar Para Transformar", una institución educativa comprometida con la formación integral y transformadora de las futuras generaciones. Fundada en 2014, hemos crecido gracias a nuestra pasión por ofrecer una educación de excelencia que va más allá de los límites convencionales del aprendizaje.</p>
                            <p class="masthead-subheading font-weight-normal">Nuestro equipo está compuesto por docentes y profesionales altamente capacitados en el ámbito educativo, todos unidos por la visión de crear un mundo donde la educación sea la herramienta fundamental para el cambio positivo.</p>
                            <p class="masthead-subheading font-weight-normal">Con nuestra vasta experiencia en el campo educativo, hemos logrado consolidarnos como una referencia de alta calidad en la educación en la ciudad de Resistencia. Nos mueve la pasión por lo que hacemos y el deseo constante de innovar y adaptarnos a las necesidades cambiantes del entorno educativo actual.</p>
                            <p class="masthead-subheading font-weight-normal">En "Educar Para Transformar", creemos que la educación es la herramienta más poderosa para cambiar el mundo. Es esta creencia la que guía cada paso que damos, cada aula que iluminamos y cada mente joven que ayudamos a moldear.</p>
                        </div>
                        <img class="nosotros__imagen" src="img/CENTRO_HD.bmp" alt="imagen nosotros">
                    </div>
                </div>
            </section>

            <!-- Niveles Educativos Section-->
            <section class="page-section portfolio" id="NivelesEducativos">
                <div class="contenedor-contenido">
                    <!-- Portfolio Section Heading-->
                    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Niveles Educativos</h2>
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
                    <!-- Portfolio Grid Items-->
                    <div class="row justify-content-center">
                        <!-- Portfolio Item 1-->
                        <div class="col-md-6 col-lg-4 mb-5">
                            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                                <div class="portfolio-item-caption1 d-flex align-items-center justify-content-center h-100 w-100">
                                    <div class="portfolio-item-caption-content text-center text-white"></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/NIVEL_INICIAL(edit).jpg" alt="..." />
                            </div>
                        </div>
                        <!-- Portfolio Item 2-->
                        <div class="col-md-6 col-lg-4 mb-5">
                            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                                <div class="portfolio-item-caption2 d-flex align-items-center justify-content-center h-100 w-100">
                                    <div class="portfolio-item-caption-content text-center text-white"></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/NIVEL_PRIMARIO(edit).jpg" alt="..." />
                            </div>
                        </div>
                        <!-- Portfolio Item 3-->
                        <div class="col-md-6 col-lg-4 mb-5">
                            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                                <div class="portfolio-item-caption3 d-flex align-items-center justify-content-center h-100 w-100">
                                    <div class="portfolio-item-caption-content text-center text-white"></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/NIVEL_SECUNDARIO(edit).jpg" alt="..." />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Noticias  Section-->
            <!-- Noticias  Section-->
            <section class="page-section portfolio" id="Noticias">
                <div class="news-section contenedor-contenido">
                    <div class="page-section-noticias div-noticias" >
                        <h2  class="page-section-heading text-center text-uppercase text-secondary mb-0">Noticias</h2>
                        <div class="divider-custom">
                            <div class="divider-custom-line"></div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-info-circle" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                            <path d="M12 9h.01" />
                            <path d="M11 12h1v4h1" />
                            </svg>
                            <div class="divider-custom-line"></div>
                        </div>
                    </div>
                    <div class="slide-container swiper">
                        <div class="slide-content">
                            <div class="card-wrapper swiper-wrapper">
                                <!-- Noticia 1-->
                                <div class="card swiper-slide">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="assets/img/portfolio/noticia.jpg" alt="" class="card-img">
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <h2 class="titulo-news">Lectura y Educacion</h2>
                                        <p class="description-news">
                                            Como todos los años desde 1996, y en la ciudad de Resistencia, Chaco, esta semana le tocó a este columnista inaugurar el 28º Foro Internacional del Libro y la Lectura que, durante una intensa semana, convocó a decenas de intelectuales de diferentes países y de toda la Argentina para que ante un público impresionante –miles de personas provenientes de diferentes países y de todas las provincias argentinas– compartiesen conocimientos y experiencias en el camino hacia una sociedad de lectores y lectoras, o sea una sociedad activa intelectualmente.
                                        </p>
                                        <button class="button">Ver Mas</button>

                                    </div>
                                </div>
                                <!-- Noticia 2-->
                                <div class="card swiper-slide">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="assets/img/portfolio/noticia.jpg" alt="" class="card-img">
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <h2 class="titulo-news">Lectura y Educacion</h2>
                                        <p class="description-news">
                                            Como todos los años desde 1996, y en la ciudad de Resistencia, Chaco, esta semana le tocó a este columnista inaugurar el 28º Foro Internacional del Libro y la Lectura que, durante una intensa semana, convocó a decenas de intelectuales de diferentes países y de toda la Argentina para que ante un público impresionante –miles de personas provenientes de diferentes países y de todas las provincias argentinas– compartiesen conocimientos y experiencias en el camino hacia una sociedad de lectores y lectoras, o sea una sociedad activa intelectualmente.
                                        </p>
                                        <button class="button">Ver Mas</button>

                                    </div>
                                </div>
                                <!-- Noticia 3-->
                                <div class="card swiper-slide">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="assets/img/portfolio/noticia.jpg" alt="" class="card-img">
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <h2 class="titulo-news">Lectura y Educacion</h2>
                                        <p class="description-news">
                                            Como todos los años desde 1996, y en la ciudad de Resistencia, Chaco, esta semana le tocó a este columnista inaugurar el 28º Foro Internacional del Libro y la Lectura que, durante una intensa semana, convocó a decenas de intelectuales de diferentes países y de toda la Argentina para que ante un público impresionante –miles de personas provenientes de diferentes países y de todas las provincias argentinas– compartiesen conocimientos y experiencias en el camino hacia una sociedad de lectores y lectoras, o sea una sociedad activa intelectualmente.
                                        </p>
                                        <button class="button">Ver Mas</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next swiper-navBtn"></div>
                        <div class="swiper-button-prev swiper-navBtn"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section>

            <section class="page-section portfolio" id="BienEstarEstudiantil">
                <div class="container">
                <div class="text-center"> <!-- Agrega este div con la clase text-center -->

                    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Bienestar Estudiantil</h2>

                    <div class="divider-custom">
                        <div class="divider-custom-line"></div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart-handshake" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                        <path d="M12 6l-3.293 3.293a1 1 0 0 0 0 1.414l.543 .543c.69 .69 1.81 .69 2.5 0l1 -1a3.182 3.182 0 0 1 4.5 0l2.25 2.25" />
                        <path d="M12 7v-4m3 13l2.5 3m-.74 -8.55l3.74 -1.45m-11.44 7.05l-2.56 2.95m.74 -8.55l-3.74 -1.45"></path>
                        </svg>
                        <div class="divider-custom-line"></div>
                    </div>

                    <div class="custom-icon-container-grid">
                        <div className="portfolio-item mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="custom-icon icon icon-tabler icon-tabler-ball-football" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                            <path d="M12 7l4.76 3.45l-1.76 5.55h-6l-1.76 -5.55z"></path>
                            <path d="M12 7v-4m3 13l2.5 3m-.74 -8.55l3.74 -1.45m-11.44 7.05l-2.56 2.95m.74 -8.55l-3.74 -1.45"></path>
                            </svg>
                            <span> Futbol </span>
                        </div>

                        <div className="custom-icon-container is-flex is-align-items-center is-flex-direction-column is-justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="custom-icon icon icon-tabler icon-tabler-ball-volleyball" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                            <path d="M12 12a8 8 0 0 0 8 4"></path>
                            <path d="M7.5 13.5a12 12 0 0 0 8.5 6.5"></path>
                            <path d="M12 12a8 8 0 0 0 -7.464 4.928"></path>
                            <path d="M12.951 7.353a12 12 0 0 0 -9.88 4.111"></path>
                            <path d="M12 12a8 8 0 0 0 -.536 -8.928"></path>
                            <path d="M15.549 15.147a12 12 0 0 0 1.38 -10.611"></path>
                            </svg>
                            <span>Voley </span>
                        </div>

                        <div className="custom-icon-container is-flex is-align-items-center is-flex-direction-column is-justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="custom-icon icon-tabler icon-tabler-ball-basketball" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                            <path d="M5.65 5.65l12.7 12.7"></path>
                            <path d="M5.65 18.35l12.7 -12.7"></path>
                            <path d="M12 3a9 9 0 0 0 9 9"></path>
                            <path d="M3 12a9 9 0 0 1 9 9"></path>
                            </svg>
                            <span>Basket </span>
                        </div>

                        <div className="custom-icon-container is-flex is-align-items-center is-flex-direction-column is-justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="custom-icon icon-tabler icon-tabler-chess-bishop" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M8 16l-1.447 .724a1 1 0 0 0 -.553 .894v2.382h12v-2.382a1 1 0 0 0 -.553 -.894l-1.447 -.724h-8z"></path>
                            <path d="M12 4m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                            <path d="M9.5 16c-1.667 0 -2.5 -1.669 -2.5 -3c0 -3.667 1.667 -6 5 -7c3.333 1 5 3.427 5 7c0 1.284 -.775 2.881 -2.325 3l-.175 0h-5z"></path>
                            <path d="M15 8l-3 3"></path>
                            <path d="M12 5v1"></path>
                            </svg>                               
                            <span>Ajedrez </span>
                        </div>
                        <div className="custom-icon-container is-flex is-align-items-center is-flex-direction-column is-justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="custom-icon icon-tabler icon-tabler-swimming" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M16 9m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                            <path d="M6 11l4 -2l3.5 3l-1.5 2"></path>
                            <path d="M3 16.75a2.4 2.4 0 0 0 1 .25a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 1 -.25"></path>
                            </svg>               
                            <span>Natacion </span>
                        </div>

                        <div className="custom-icon-container is-flex is-align-items-center is-flex-direction-column is-justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="custom-icon icon-tabler icon-tabler-run" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M13 4m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                            <path d="M4 17l5 1l.75 -1.5"></path>
                            <path d="M15 21l0 -4l-4 -3l1 -6"></path>
                            <path d="M7 12l0 -3l5 -1l3 3l3 1"></path>
                            </svg>
                            <span>Atletismo </span>
                        </div>

                        <div className="custom-icon-container is-flex is-align-items-center is-flex-direction-column is-justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="custom-icon icon-tabler icon-tabler-karate" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M18 4m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                            <path d="M3 9l4.5 1l3 2.5"></path>
                            <path d="M13 21v-8l3 -5.5"></path>
                            <path d="M8 4.5l4 2l4 1l4 3.5l-2 3.5"></path>
                            </svg>
                            <span>Artes Marciales </span>
                        </div>

                        <div className="custom-icon-container is-flex is-align-items-center is-flex-direction-column is-justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="custom-icon icon-tabler icon-tabler-music" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 17a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                            <path d="M13 17a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                            <path d="M9 17v-13h10v13"></path>
                            <path d="M9 8h10"></path>
                            </svg>
                            <span>Danza </span>
                        </div>


                        <div className="custom-icon-container is-flex is-align-items-center is-flex-direction-column is-justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="custom-icon icon-tabler icon-tabler-barbell" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M2 12h1"></path>
                            <path d="M6 8h-2a1 1 0 0 0 -1 1v6a1 1 0 0 0 1 1h2"></path>
                            <path d="M6 7v10a1 1 0 0 0 1 1h1a1 1 0 0 0 1 -1v-10a1 1 0 0 0 -1 -1h-1a1 1 0 0 0 -1 1z"></path>
                            <path d="M9 12h6"></path>
                            <path d="M15 7v10a1 1 0 0 0 1 1h1a1 1 0 0 0 1 -1v-10a1 1 0 0 0 -1 -1h-1a1 1 0 0 0 -1 1z"></path>
                            <path d="M18 8h2a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-2"></path>
                            <path d="M22 12h-1"></path>
                            </svg>
                            <span> Gimnasio </span>
                        </div>

                        <div className="custom-icon-container is-flex is-align-items-center is-flex-direction-column is-justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="custom-icon icon-tabler icon-tabler-bus-stop" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 3m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z"></path>
                            <path d="M18 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                            <path d="M10 5h7c2.761 0 5 3.134 5 7v5h-2"></path>
                            <path d="M16 17h-8"></path>
                            <path d="M16 5l1.5 7h4.5"></path>
                            <path d="M9.5 10h7.5"></path>
                            <path d="M12 5v5"></path>
                            <path d="M5 9v11"></path>
                            </svg>
                            <span> Traslado </span>
                        </div>

                        <div className="custom-icon-container is-flex is-align-items-center is-flex-direction-column is-justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="custom-icon icon-tabler icon-tabler-tools-kitchen-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M19 3v12h-5c-.023 -3.681 .184 -7.406 5 -12zm0 12v6h-1v-3m-10 -14v17m-3 -17v3a3 3 0 1 0 6 0v-3"></path>
                            </svg>                                
                            <span> Comedor </span>
                        </div>

                        <div className="custom-icon-container is-flex is-align-items-center is-flex-direction-column is-justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="custom-icon icon-tabler icon-tabler-report-medical" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"></path>
                            <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path>
                            <path d="M10 14l4 0"></path>
                            <path d="M12 12l0 4"></path>
                            </svg>                                
                            <span> Enfermeria </span>
                        </div>
                    </div>
                </div>
            </div>
            </section>



            <!-- Contact Section-->
            <section class="page-section" id="Inscripcion">
                <div class="contenedor-contenido">
                    <!-- Contact Section Heading-->
                    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Inscripcion</h2>
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
                            <form action="{{ route('procesar.formulario') }}" method="POST" id="contactForm">
                            @csrf
                                <!-- Name input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="nombre" id="nombre" type="text" placeholder="Ingrese su nombre..." data-sb-validations="required" />
                                    <label for="name">Full name</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                </div>
                                <!-- Email address input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="email" id="email" type="email" placeholder="nombre@example.com" data-sb-validations="required,email" />
                                    <label for="email">Email address</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                </div>
                                <!-- Phone number input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="cel" id="phone" type="tel" placeholder="(362) 456-7890" data-sb-validations="required" />
                                    <label for="phone">Phone number</label>
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                                </div>
                                <!-- Message input-->
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" name="mje" id="message" type="text" placeholder="Deje su mensaje aqui..." style="height: 10rem" data-sb-validations="required"></textarea>
                                    <label for="message">Message</label>
                                    <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                                </div>
                                <!-- Submit success message (sin cambios) -->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Inscripcion enviada</div>
                                        <br />
                                    </div>
                                </div>
                                <!-- Submit error message (sin cambios) -->
                                <div class="d-none" id="submitErrorMessage">
                                    <div class="text-center text-danger mb-3">Error sending message!</div>
                                </div>
                                <!-- Submit Button -->
                                <button class="btn btn-primary btn-xl" id="enviarButton" type="submit">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </Main>



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

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>
        

    </body>
</html>