//-------Variables
const informacionHorario = document.querySelector('#infoHorario');


//-------Eventos
horario();


//-------Funciones
function horario() {
    let hora = new Date();
    let obtenerHora = hora.getHours();
    let obtenerMinutos= hora.getMinutes();

    // if (!((obtenerHora < 0 || obtenerHora > 23)||(obtenerHora === 23 && obtenerMinutos > 0))) {
        Spinner();
        setTimeout(() => {
            ventanaInicioSesion("login.html"); 
        }, 3000);
    // } else {
    //     informacionHorario.innerHTML = `
    //         El sistema esta cerrado<br>
    //         Horario de atención: 7am - 19pm
    //     `;
    // }
}


//UI
function ventanaInicioSesion (URL){ 
    window.open(URL,"_self") 
} 
function limpiarHTML() {
    while(informacionHorario.firstChild){
        informacionHorario.removeChild(informacionHorario.firstChild);
    }
}
function Spinner() {
    limpiarHTML();
    const divSpinner = document.createElement('div');
    divSpinner.classList.add('sk-fading-circle');

    divSpinner.innerHTML = `
        <div class="sk-circle1 sk-circle"></div>
        <div class="sk-circle2 sk-circle"></div>
        <div class="sk-circle3 sk-circle"></div>
        <div class="sk-circle4 sk-circle"></div>
        <div class="sk-circle5 sk-circle"></div>
        <div class="sk-circle6 sk-circle"></div>
        <div class="sk-circle7 sk-circle"></div>
        <div class="sk-circle8 sk-circle"></div>
        <div class="sk-circle9 sk-circle"></div>
        <div class="sk-circle10 sk-circle"></div>
        <div class="sk-circle11 sk-circle"></div>
        <div class="sk-circle12 sk-circle"></div>
    `;
    informacionHorario.appendChild(divSpinner);
}