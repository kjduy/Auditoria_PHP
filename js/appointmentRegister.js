/**************************Validations*********************************************/
//Search Input
const formulario = document.querySelector('#formBuscar');
const inputCedula = document.querySelector('#search_chain');

function cedula_val(value) { 
    let [suma, mul, index] = [0, 1, value.length];
    while (index--) {
    let num = value[index] * mul;
    suma += num - (num > 9) * 9;
    mul = 1 << index % 2;
    }

    if ((suma % 10 === 0) && (suma > 0)) {
        return true;
    } else {
        return false;
    }
}
// Inputs
let campoBusquedaCedula = false;

const validarCedulaInput = () => {
    const cedula = document.querySelector('#search_chain').value;
    if(cedula_val(cedula)){
        campoBusquedaCedula = true;
    }else{
        imprimirAlerta(document.getElementById(`grupo_search_chain`),'error','Cedula no encontrada');
        campoBusquedaCedula = false;
    }

}

inputCedula.addEventListener('keyup', validarCedulaInput);
inputCedula.addEventListener('blur', validarCedulaInput);

//---------Patient Form
const inputs = document.querySelectorAll('#nuevoPaciente input');

// Valores posibles a validar
const expresiones = {
	letras: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	usuario: /^[a-zA-Z0-9Ññ ]*$/, // Letras, numeros, guion y guion_bajo
	password: /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/,
	correo: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
	telefono: /^\d{7,10}$/,
    numeros:/^\d+$/,
    fecha:/^(?:3[01]|[12][0-9]|0?[1-9])([\-/.])(0?[1-9]|1[1-2])\1\d{4}$/,
    address:/^[a-zA-Z0-9Ññ ]*$/
}

function cedula_val(value) { 
    let [suma, mul, index] = [0, 1, value.length];
    while (index--) {
    let num = value[index] * mul;
    suma += num - (num > 9) * 9;
    mul = 1 << index % 2;
    }

    if ((suma % 10 === 0) && (suma > 0)) {
        return true;
    } else {
        return false;
    }
}
// Inputs
const campos = {
	name_HC: false,
	lastName_HC: false,
	cedula_HC: false,
	passport_HC: false,
	phone_HC: false
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "name_HC":
			validarCampo(expresiones.letras, e.target, 'name_HC','Solo se admiten letras');
		break;
		case "lastName_HC":
			validarCampo(expresiones.letras, e.target, 'lastName_HC','Solo se admiten letras');
		break;
		case "cedula_HC":
            if(cedula_val(e.target.value)){
                document.getElementById(`grupo_cedula_HC`).classList.remove('formulario__grupo-incorrecto');
                document.getElementById(`grupo_cedula_HC`).classList.add('formulario__grupo-correcto');
                campos['cedula_HC'] = true;
            }else{
                document.getElementById(`grupo_cedula_HC`).classList.add('formulario__grupo-incorrecto');
                document.getElementById(`grupo_cedula_HC`).classList.remove('formulario__grupo-correcto');
                imprimirAlerta(document.getElementById(`grupo_cedula_HC`),'error','Cedula Invalida');
                campos['cedula_HC'] = false;
            }
            break;
        case "passport_HC":
            validarCampo(expresiones.numeros, e.target, 'passport_HC','Solo se admiten números');
        break;
        case "phone_HC":
			validarCampo(expresiones.telefono, e.target, 'phone_HC','Teléfono incorrecto o invalido');
		break;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

const validarCampo = (expresion, input, campo,mensaje) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo_${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo_${campo}`).classList.add('formulario__grupo-correcto');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo_${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo_${campo}`).classList.remove('formulario__grupo-correcto');
        imprimirAlerta(document.getElementById(`grupo_${campo}`),'error',mensaje);
		campos[campo] = false;
	}
}


// UI
function imprimirAlerta(selector,tipo,mensaje){
    const alerta = document.querySelector('.alerta');

    if(!alerta){
        const divMensaje = document.createElement('div');
        divMensaje.classList.add('text-center', 'alert', 'd-block', 'col-10','mt-1','alerta','p-1');

        //Agregar clase en base al tipo de error
        if(tipo === 'error'){
            divMensaje.classList.add('alert-danger');
        } else {
            divMensaje.classList.add('alert-success');
        }

        divMensaje.textContent = mensaje;

        selector.appendChild(divMensaje);
        setTimeout(()=>{
            divMensaje.remove();
        },3000);
    }
}
document.querySelector('#btnCancelar').addEventListener('click',()=>{
    document.querySelectorAll('.formulario__grupo-correcto').forEach((clase) => {
        clase.classList.remove('formulario__grupo-correcto');
    });
    document.querySelectorAll('.formulario__grupo-incorrecto').forEach((clase) => {
        clase.classList.remove('formulario__grupo-incorrecto');
    });
})
/******************************New patient*********************************************/
function new_patient(){
    document.getElementById("nuevoPaciente").reset();
    $('#modal_patient').modal('show');
}

function close_modal(){
    $("#app_modal").modal('hide');
}

/******************************Fill patient Name*********************************************/
$("#search_chain").bind("input propertychange", function () {
    var aux = $(this).val();
    if(aux.length == 10){
        $.ajax({
            type: "POST",
            datatype: "html",
            url: "../controller/identify_patient.php",
            data: {cedula: aux},
            success: function (response) {
                var obj = JSON.parse(response);
                $("#pt_id").val(obj.id_HC);
                $("#pt_name").val(obj.name_HC + ' ' +obj.lastName_HC);
            }
        });
    }
    else{
        $("#pt_name").val("No es paciente");
    }
});
/**********************************************************************************/

/**************************Reg Patient*********************************************/
function register() {
  
    let elem = document.getElementById("nuevoPaciente").elements;
    let data = {};
    let user_cedula;

    for (var i = 0; i < elem.length; i++) {
        if(elem[i].name == "cedula_HC"){
            data[elem[i].name] = elem[i].value;
            user_cedula = elem[i].value;
        }
        else {
            data[elem[i].name] = elem[i].value;
        }
    }
  
    let sql_keys = '';
    let sql_values = '';
    var length = Object.keys(data).length - 1;
    var count = 0;

    for (var i in data) {
        if (count == length) {
            sql_keys += i;
            sql_values += "'" + data[i] + "'";
        }
        else {
            sql_keys += i + ",";
            sql_values += "'" + data[i] + "',";
        }
        count++;
    }

    //document.getElementById("demo").innerHTML = sql_keys + '<br>'+ sql_values;
    if(campos.name_HC && campos.lastName_HC && campos.cedula_HC && campos.phone_HC && data['gender_HC']!='' && data['dateOB_HC']!=''){
        $.ajax({
            type: "POST",
            datatype: "html",
            url: "../controller/patient_reg.php",
            data: {keys: sql_keys , values:sql_values, cedula:user_cedula},
    
            success: function (response) {
                if(response == 'exito'){
                    imprimirAlerta(document.querySelector('.mensaje-error'),'success','Guardado Exitosamente');
                    document.getElementById("nuevoPaciente").reset();
                    document.querySelectorAll('.formulario__grupo-correcto').forEach((clase) => {
                        clase.classList.remove('formulario__grupo-correcto');
                    });
                    patient_table.ajax.reload(null, false);
                }
                else if(response == 'duplicado'){
                    imprimirAlerta(document.querySelector('.mensaje-error'),'error','La cedula esta duplicada');
                    document.getElementById(`grupo_cedula_Prof`).classList.add('formulario__grupo-incorrecto');
                }
                else {
                    imprimirAlerta(document.querySelector('.mensaje-error'),'error','Se produjo un error');
                }
            }
        });
    }else{
        imprimirAlerta(document.querySelector('.mensaje-error'),'error','Existen campos vacíos');
    }
    
}
/**********************************************************************************/
/***************************Populate Select*********************************************/
$(document).on('change', '#occupation_R', function() {
    doctors_select();
});

function doctors_select(){

    let d_type = $('select[name="occupation_R"] option:selected').val();
    
    $.ajax({
        type: "POST",
        datatype: "html",
        url: "../controller/calendar_doctors.php",
        data: {type: d_type},

        success: function (response) {
            let objects = JSON.parse(response);
            let options = "<option value=''>Seleccionar:</option>";
            for (x in objects) {
                options += "<option value='" + objects[x].id_Dc +"'>"+ objects[x].name_Dc+ ' ' +objects[x].lastName_Dc +"</option>";
            }
            $("#doctors").html(options);
        }
    });
}
/******************************************************************************************/

/***************************Calendar*******************************************************/

function consult(){
    let id_Dc = $('select[name="doctors"] option:selected').val();
    let dc_name = $('select[name="doctors"] option:selected').text();
    $('#dc_name').val(dc_name);

    $.ajax({
        type: "POST",
        datatype: "html",
        url: "../controller/calendar_hours.php",
        data: {id: id_Dc},
        success: function (response) {
            let objects = JSON.parse(response);
            let hours = "<p class='text-dark'>";
            for (x in objects) {
                hours += objects[x]+", ";
            }
            hours += "</p>";
            $("#available_hours").html(hours);
        }
    });

    $.ajax({
        type: "POST",
        datatype: "html",
        url: "../controller/calendar_days.php",
        data: {id: id_Dc},
        success: function (dow) {
            populateCalendar(dow,id_Dc);
        }
    });
}

// dow = Days of Week that the doctor is available
function populateCalendar(dow,id_Dc){
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        locale: 'es',
        timeZone: 'local',
        headerToolbar: {
            left: 'title',
            center: 'today,dayGridMonth',
            right: 'prev,next'
        },
        navLinks: true, 
        businessHours: true,
        editable: true,
        selectable: true,
 
        eventClick: function (info) {
            $("#app_modal").modal('show');
            $("#app_title").html("Cita: "+info.event.id);
            $("#app_date").val(info.event.extendedProps.c_date);
            $("#app_time").val(info.event.extendedProps.time);
            $("#app_doctor").val(info.event.extendedProps.doctor);
            $("#app_patient").val(info.event.title);

            $("#app_time").prop('disabled', true);
        },

        dateClick: function (info){
            if(check_day(dow,info.dateStr)){
                clearModal();
                new_app(info.dateStr);
            }  
        },

       businessHours: {
            daysOfWeek: dow
        },

        eventSources: ['../controller/calendar_events.php?msg='+id_Dc],

        eventTimeFormat: {
            hour: '2-digit',
            minute: '2-digit',
            meridiem: false
        },

    });
    calendar.render();
}

function check_day(dow,pick_date){
    
    let flag;
    var picked_date = new Date(pick_date).toISOString().slice(0, 10);
    var today_date = moment().subtract(1, "days").format("YYYY-MM-DD");
    
    if(picked_date>today_date){
        flag = true
    }
    else {
        flag = false
    }
    
    var date = new Date(pick_date);
    var day = date.getDay();
    var aux = dow.search(day+1);
    if(aux != -1 && flag){
        return true;
    }

    return false;
}

function new_app(date){
    let dc_name = $('select[name="doctors"] option:selected').text();
    let pt_name = $('#pt_name').val();
    
    $("#app_modal").modal('show');
    $("#app_date").val(date);
    $("#app_time").prop('disabled', false);
    $("#app_doctor").val(dc_name);
    $("#app_patient").val(pt_name);
}


function clearModal(){ 
    $("#app_title").html("Nueva Cita");
    $("#app_time").val('');
    $("#app_date").val('');
    $("#app_patient").val('');
    $("#app_doctor").val('');
    $("#alert_modal").html('');
}


function reg_app(){

    var id_pt = $("#pt_id").val();
    let id_dc = $('select[name="doctors"] option:selected').val();

    var ap_pt = $("#app_patient").val();
    var ap_dc = $("#app_doctor").val();
    
    var ap_date = $("#app_date").val();
    var ap_hour = $("#app_time").val();
    var ap_start = ap_date + ' ' + ap_hour + ':00';
    
    var oldDateObj = new Date(ap_start);
    var d = moment(oldDateObj).add(20, 'm').toDate();

    var ap_end = d.getFullYear() + "-" + ("0"+(d.getMonth()+1)).slice(-2) + "-" + ("0" + d.getDate()).slice(-2) +
    " " + ("0" + d.getHours()).slice(-2) + ":" + ("0" + d.getMinutes()).slice(-2) + ":00";
  
    $.ajax({
        type: "POST",
        datatype: "html",
        url: "../controller/calendar_reg.php",
        data: {id_patient:id_pt, patient:ap_pt, id_doctor:id_dc, doctor:ap_dc, hour:ap_hour, start:ap_start, end:ap_end},
        success: function (response) {
            $("#alert_modal").html(response);
            if (response == 'Cita Registrada'){
                consult();
                // imprimirAlerta(document.querySelector('.mensaje-error'),'success','Cita Agendada');
            }

        }
    });
}
