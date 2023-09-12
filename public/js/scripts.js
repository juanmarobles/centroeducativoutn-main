/*!
 * Start Bootstrap - Freelancer v7.0.7 (https://startbootstrap.com/theme/freelancer)
 * Copyright 2013-2023 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-freelancer/blob/master/LICENSE)
 */
//
// Scripts
// 
var swiper = new Swiper(".slide-content", {
    slidesPerView: 4,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        1040: {
            slidesPerView: 3,
        },
        1560: {
            slidesPerView: 4,
        },
    },
});


// Seleccionar el formulario por su ID
var contactForm = document.getElementById("contactForm");

// Agregar un controlador de eventos 'submit' al formulario
contactForm.addEventListener("submit", function (event) {
    // Mostrar una alerta cuando el formulario se envía con éxito
    alert("Formulario enviado con éxito");
});

contactForm.addEventListener("enviar", function (event) {
    // Mostrar una alerta cuando el formulario se envía con éxito
    alert("Comentario enviado con éxito");
});

// Obtiene el enlace de "Empleo"
const empleoLink = document.querySelector('.nav-link-empleo');

// Verifica si la página actual es "empleo.jsp"
if (window.location.href.includes('empleo.jsp')) {
    empleoLink.classList.add('active'); // Agrega la clase "active" para resaltar el enlace
}

function App() {}
window.onload = function (event) {
    var app = new App();
    window.app = app;
}

App.prototype.processingButton = function (event) {
    const btn = event.currentTarget;
    const carruselList = event.currentTarget.parentNode;
    const track = event.currentTarget.parentNode.querySelector('#track');
    const carrusel = track.querySelectorAll('.carousel');
    const carruselWidth = carrusel[0].offsetWidth;
    const trackWidth = track.offsetWidth;
    const listWidth = carruselList.offsetWidth;
    track.style.left == "" ? leftPosition = track.style.left = 0 : leftPosition = parseFloat(track.style.left.slice(0, -2) * -1);
    btn.dataset.button == "button-prev" ? prevAction(leftPosition, carruselWidth, track) : nextAction(leftPosition, trackWidth, listWidth, carruselWidth, track);
}
let prevAction = (leftPosition, carruselWidth, track) => {
    if (leftPosition > 0) {
        track.style.left = `${-1 * (leftPosition - carruselWidth)}px`;
    }
}
let nextAction = (leftPosition, trackWidth, listWidth, carruselWidth, track) => {
    if (leftPosition < (trackWidth - listWidth)) {
        track.style.left = `${-1 * (leftPosition + carruselWidth)}px`

    }
}

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            rootMargin: '0px 0px -40%',
        });
    }
    ;

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
            document.querySelectorAll('#navbarResponsive .nav-link')
            );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });
});

function confirmLogout() {
    // Aquí debes realizar la solicitud al servidor para cerrar la sesión actual.
    // Puedes usar una petición AJAX o simplemente redirigir al usuario a una página de cierre de sesión en el servidor.
    // La implementación exacta dependerá de cómo manejas la autenticación en tu aplicación.

    // Por ejemplo, si estás usando una petición AJAX (assumiendo que tienes una URL para cerrar sesión):
    $.ajax({
        type: "POST",
        url: "indexinvitado.jsp", // Ajusta la URL según tu configuración
        success: function(response) {
            // Aquí puedes realizar alguna acción adicional después de cerrar sesión (si es necesario).
            // Por ejemplo, mostrar un mensaje de éxito o redirigir al usuario.

            // Redirecciona al usuario a la página de inicio de sesión
            window.location.href = "indexinvitado.jsp"; // Ajusta la URL según tu configuración
        },
        error: function(error) {
            // Manejo de errores si la solicitud al servidor falla.
            console.error("Error al cerrar sesión: " + error);
        }
    });
}
// Función para mostrar el botón de cierre de sesión y ocultar el botón de inicio de sesión
function showLogoutButton() {
    document.getElementById("loginButton").style.display = "none";
    document.getElementById("logoutButton").style.display = "block";
}

// Función para mostrar el botón de inicio de sesión y ocultar el botón de cierre de sesión
function showLoginButton() {
    document.getElementById("loginButton").style.display = "block";
    document.getElementById("logoutButton").style.display = "none";
}

// Verificar si existe un usuario autenticado en la sesión
function verificarAutenticacion() {
    if (usuarioAutenticado) {
        showLogoutButton(); // Mostrar el botón de cierre de sesión si el usuario está autenticado
    } else {
        showLoginButton(); // Mostrar el botón de inicio de sesión si el usuario no está autenticado
    }
}

// Llamar a la función para verificar la autenticación al cargar la página
verificarAutenticacion();
