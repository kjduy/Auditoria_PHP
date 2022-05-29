//-------Variables
const formularioLogin = document.querySelector('#login_form');

//-------Eventos
// comprobarHorario();
formularioLogin.addEventListener('submit',inicioSesion);


//-------Funciones
function comprobarHorario() {
    let hora = new Date();
    let obtenerHora = hora.getHours();
    let obtenerMinutos= hora.getMinutes();
    if ((obtenerHora < 1 || obtenerHora > 22)||(obtenerHora === 22 && obtenerMinutos > 0)) {
        alert("La pagina no esta disponible por el momento");
        ventanaInicioSesion("welcome.html");
    }
}

function ventanaInicioSesion(URL) {
    window.open(URL, "_self");
}

function inicioSesion(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        datatype: "html",
        url: "../php/connection.php",
        data: {
            username: $("#username").val(),
            password: $("#password").val(),
        },
        success: function (data) {
            if (data == "false") {
                $("#login_alert").html(
                    "El usuario o la contraseña es invalido"
                );
            } else {
                $("#login_alert").html(data);
            }
        },
    });
}
