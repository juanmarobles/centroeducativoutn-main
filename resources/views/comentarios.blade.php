
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Centro Educativo - Comentarios</title>
        <!-- Swipper CSS-->
        <link rel="stylesheet" href="css/swiper-bundle.min.css">

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Google fonts-->    
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />

        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="css/normalize.css">
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

        <style>
            .comment-box .comment-form {
                margin-top: 20px;
                display: flex;
                flex-direction: column;
                align-items: center; /* Centra horizontalmente */
                text-align: center; /* Alinea el texto en el centro */
            }

            .comment-box input[type="text"],
            .comment-box textarea {
                width: 100%;
                padding: 10px;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }
            #comments-container {
                display: flex; /* Utilizamos flexbox para centrar verticalmente */
                flex-direction: column; /* Aplicamos una disposición en columna */
                align-items: center; /* Centramos horizontalmente */
                justify-content: center; /* Centramos verticalmente */
                text-align: center; /* Alineamos el texto en el centro */
            }
        </style>



    </head>

    <body id="page-top">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

       
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
                <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('indexinvitado') }}#Inscripcion">Noticias</a>
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


        <!-- COMENTARIOS Section-->

        <section class="page-section" id="comentarios">
            <div class="comment-box text center">
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil-heart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M17 11l1.5 -1.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4h4l2 -2"></path>
                    <path d="M13.5 6.5l4 4"></path>
                    <path d="M18 22l3.35 -3.284a2.143 2.143 0 0 0 .005 -3.071a2.242 2.242 0 0 0 -3.129 -.006l-.224 .22l-.223 -.22a2.242 2.242 0 0 0 -3.128 -.006a2.143 2.143 0 0 0 -.006 3.071l3.355 3.296z"></path>
                    </svg>
                    <div class="divider-custom-line"></div>
                </div>
                <h1 class="page-section-heading text-center text-uppercase text-secondary mb-0">Comentarios</h1>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil-heart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M17 11l1.5 -1.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4h4l2 -2"></path>
                    <path d="M13.5 6.5l4 4"></path>
                    <path d="M18 22l3.35 -3.284a2.143 2.143 0 0 0 .005 -3.071a2.242 2.242 0 0 0 -3.129 -.006l-.224 .22l-.223 -.22a2.242 2.242 0 0 0 -3.128 -.006a2.143 2.143 0 0 0 -.006 3.071l3.355 3.296z"></path>
                    </svg>
                    <div class="divider-custom-line"></div>
                </div>

                                <!-- Mostrar los comentarios existentes -->
<div id="comments-container">
    @foreach($comentarios as $comentario)
        <div class="comment">
            <strong>{{ $comentario->Autor }}</strong>
            <p>{{ $comentario->Comentario }}</p>
            <!-- Mostrar otros campos de comentario si es necesario -->
        </div>
    @endforeach
</div>
<div class="comment-form text-center" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
    <h1>Deja un comentario</h1>
    <form action="{{ route('comentarios.store') }}" method="POST" id="contactForm">
        @csrf <!-- Agrega el token CSRF para protección -->
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="nombre" required><br><br>

        <label for="comment">Comentario:</label><br>
        <textarea id="comment" name="comentario" rows="4" cols="50" required></textarea><br><br>

        <button class="btn btn-primary btn-user btn-block" id="submitButton" type="submit">Enviar</button>
    </form>
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

        <!-- Swiper JS-->
        <script src="js/swiper-bundle.min.js"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Agrega jQuery si aún no está incluido en tu página -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
                            // Función para agregar un nuevo comentario
                            function agregarComentario() {
                                var formulario = document.getElementById("comment-form");

                                formulario.addEventListener("submit", function (event) {
                                    event.preventDefault();

                                    // Obtener valores del formulario
                                    var autor = document.getElementById("name").value;
                                    var mensaje = document.getElementById("comment").value; // Cambiado a "mensaje"

                                    // Crear un nuevo objeto de comentario
                                    var nuevoComentario = {
                                        autor: autor,
                                        mensaje: mensaje // Cambiado a "mensaje"
                                    };

                                    // Agregar el nuevo comentario al objeto JSON
                                    comentarios.push(nuevoComentario);

                                    // Limpiar el formulario
                                    document.getElementById("name").value = "";
                                    document.getElementById("comment").value = "";

                                    // Mostrar los comentarios actualizados
                                    mostrarComentarios();

                                    // Guardar el objeto JSON actualizado en el archivo comentarios.json (si es necesario)
                                    guardarComentariosEnJSON(comentarios);
                                });
                            }

                            // Función para guardar el objeto JSON en el archivo comentarios.json (si es necesario)
                            function guardarComentariosEnJSON(comentarios) {
                                var comentariosJSON = JSON.stringify(comentarios);

                                // Puedes usar una función AJAX para guardar el objeto JSON en el servidor
                                // Ejemplo usando Fetch API:
                                fetch("guardar_comentarios.php", {
                                    method: "POST",
                                    body: comentariosJSON
                                })
                                        .then(response => response.json())
                                        .then(data => {
                                            // Aquí puedes manejar la respuesta del servidor si es necesario
                                        })
                                        .catch(error => {
                                            console.error("Error al guardar comentarios: " + error);
                                        });
                            }

                            // Variable para almacenar los comentarios cargados desde el archivo JSON
                            var comentarios = [];

                            // Función para cargar y mostrar los comentarios desde el archivo JSON
                            function cargarComentarios() {
                                fetch('comentarios.json')
                                        .then(response => response.json())
                                        .then(data => {
                                            comentarios = data;
                                            mostrarComentarios();
                                        })
                                        .catch(error => {
                                            console.error('Error al cargar los comentarios:', error);
                                        });
                            }

                            // Función para mostrar comentarios
                            function mostrarComentarios() {
                                var container = document.getElementById("comments-container");
                                container.innerHTML = ""; // Limpiar el contenedor antes de agregar comentarios

                                for (var i = 0; i < comentarios.length; i++) {
                                    var comentario = comentarios[i];
                                    var comentarioHTML = '<div class="comment">';
                                    comentarioHTML += '<p>Autor: ' + comentario.autor + '</p>';
                                    comentarioHTML += '<p>Mensaje: ' + comentario.mensaje + '</p>'; // Cambiado a "mensaje"
                                    comentarioHTML += '</div>';
                                    container.innerHTML += comentarioHTML;
                                }
                            }

                            // Llama a la función para cargar comentarios cuando se carga la página
                            window.onload = cargarComentarios;

                            // También puedes llamar a cargarComentarios() en respuesta a eventos o cuando sea necesario.
                            agregarComentario();
        </script>

    </body>
</html>
