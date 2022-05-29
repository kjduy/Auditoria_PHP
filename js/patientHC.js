document.addEventListener("DOMContentLoaded", function(event) {
    document.querySelector('#cedula_HC').disabled = true;
    document.querySelector('#dateOB_HC').disabled = true;
    setTimeout(() => {
        if(document.querySelector('#placeOB_HC').value !== ''){
            document.querySelector('#placeOB_HC').disabled = true;
        }
    }, 100);
});
/**************************Validations*********************************************/
const formulario = document.querySelector('#datosPersonalesHC');
const inputs = document.querySelectorAll('#datosPersonalesHC input');

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
// Inputs
const camposDP = {
	address_HC: false,
    career_HC: false,
    etnia_HC: false,
    height_HC: false,
    insurance_HC: false,
    job_HC: false,
    lastName_HC: false,
    name_HC: false,
    nationality_HC: false,
    passport_HC: false,
    phone_HC: false,
    placeOB_HC: false,
    religion_HC: false,
    semester_HC: false,
    weight_HC: false
}

const camposDPValor = {
	address_HC: '',
    career_HC: '',
    etnia_HC: '',
    height_HC: '',
    insurance_HC: '',
    job_HC: '',
    lastName_HC: '',
    name_HC: '',
    nationality_HC: '',
    passport_HC: '',
    phone_HC: '',
    placeOB_HC: '',
    religion_HC: '',
    semester_HC: '',
    weight_HC: ''
}

const validarFormularioDatosPersonales = (e) => {
	switch (e.target.name) {
		case "name_HC":
			validarCampo(expresiones.letras, e.target, 'name_HC','Solo se admiten letras');
            camposDPValor[e.target.name] = e.target.value;
		break;
		case "lastName_HC":
			validarCampo(expresiones.letras, e.target, 'lastName_HC','Solo se admiten letras');
            camposDPValor[e.target.name] = e.target.value;
		break;
        case "passport_HC":
            validarCampo(expresiones.numeros, e.target, 'passport_HC','Solo se admiten números');
            camposDPValor[e.target.name] = e.target.value;
        break;
        case "phone_HC":
			validarCampo(expresiones.telefono, e.target, 'phone_HC','Teléfono incorrecto o invalido');
            camposDPValor[e.target.name] = e.target.value;
		break;
        case "address_HC":
			validarCampo(expresiones.address, e.target, 'address_HC','La dirección no es correcta');
            camposDPValor[e.target.name] = e.target.value;
        break;
        case "placeOB_HC":
			validarCampo(expresiones.letras, e.target, 'placeOB_HC','Lugar de nacimiento no valido');
            camposDPValor[e.target.name] = e.target.value;
        break;
        case "nationality_HC":
			validarCampo(expresiones.letras, e.target, 'nationality_HC','Nacionalidad no valida');
            camposDPValor[e.target.name] = e.target.value;
        break;
        case "etnia_HC":
			validarCampo(expresiones.letras, e.target, 'etnia_HC','Etnia no valida');
            camposDPValor[e.target.name] = e.target.value;
        break;
        case "religion_HC":
			validarCampo(expresiones.letras, e.target, 'religion_HC','Religion no valida');
            camposDPValor[e.target.name] = e.target.value;
        break;
        case "career_HC":
			validarCampo(expresiones.letras, e.target, 'career_HC','Carrera no valida');
            camposDPValor[e.target.name] = e.target.value;
        break;
        case "semester_HC":
			validarCampo(expresiones.numeros, e.target, 'semester_HC','Semestre no valida');
            camposDPValor[e.target.name] = e.target.value;
        break;
        case "job_HC":
			validarCampo(expresiones.letras, e.target, 'job_HC','Ocupación no valida');
            camposDPValor[e.target.name] = e.target.value;
        break;
        case "weight_HC":
			validarCampo(expresiones.numeros, e.target, 'weight_HC','Peso no valido');
            camposDPValor[e.target.name] = e.target.value;
        break;
        case "height_HC":
			validarCampo(expresiones.numeros, e.target, 'height_HC','Altura no valida');
            camposDPValor[e.target.name] = e.target.value;
        break;
        case "insurance_HC":
			validarCampo(expresiones.letras, e.target, 'insurance_HC','Seguro no valida');
            camposDPValor[e.target.name] = e.target.value;
        break;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormularioDatosPersonales);
	input.addEventListener('blur', validarFormularioDatosPersonales);
});

const validarCampo = (expresion, input, campo,mensaje) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo_${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo_${campo}`).classList.add('formulario__grupo-correcto');
		camposDP[campo] = true;
	} else {
		document.getElementById(`grupo_${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo_${campo}`).classList.remove('formulario__grupo-correcto');
        imprimirAlerta(document.getElementById(`grupo_${campo}`),'error',mensaje);
		camposDP[campo] = false;
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

/**************************Populate Fields*************************************/
function loadForm(){
    var id = $("#id_HC").val();
    populateForm(id, 'datosPersonalesHC','g_data');
    populateForm(id,'patient_per_ant','ant_per');
    populateForm(id,'patient_fam_ant','ant_fam');	

}

function populateForm(p_id,idForm,msg){
    $.ajax({
        type: "POST",
        datatype: "html",
        url: "../controller/patient_data.php?msg="+msg,
        data: {id: p_id},
        success: function (response) {
            var obj = JSON.parse(response);
            populateInputs(obj,idForm);
        }
    });
}

function populateInputs(obj,idForm){

    let elem = document.getElementById(idForm).elements;
    for (var key in obj) {     
        let field = match_key_id(key,elem);

        if (field[0] !='false' && field[0] !='checkbox'){
            $("#"+idForm+" #" +field[1]).val(obj[key]);
        }

        if (field[0] !='false' && field[0] =='checkbox'){
            if(obj[key] == 'yes'){  
                $("#"+idForm+" #" +field[1]).prop('checked', true);
            }else{
                $("#"+idForm+" #" +field[1]).prop('checked', false);
            }
        }
    }
}

function match_key_id(key,elem){

    for (var i = 0; i < elem.length; i++) {
       if (elem[i].name == key && elem[i].name!= 'pass_Dc') {
            let aux = [elem[i].type,elem[i].name]; 
            return aux;
        }
    }
    let aux = ['false','false'];
    return aux;
}

/***********************************************************************************/

/********************************Update*********************************************/
function update(){

    let elem = document.getElementById("datosPersonalesHC").elements;
    let user_id = elem[0].value;
    
    let g_data = {};
    for (var i = 1; i < elem.length; i++) {
        if (elem[i].type == "checkbox") {

            (elem[i].checked) ? g_data[elem[i].name] = "yes" : g_data[elem[i].name] = "no";
        }
        else {
            g_data[elem[i].name] = elem[i].value;
        }
    }

    let g_values = '';
    var length = Object.keys(g_data).length - 1;
    var count = 0;

    for (var i in g_data) {
        if (count == length) {
            g_values += i + "='" + g_data[i] + "'";
        }
        else {
            g_values += i + "='" + g_data[i] + "',";
        }
        count++;
    }
    /****************Personal Antecedentes**************** */
    let elem_per = document.getElementById("patient_per_ant").elements;
    let ant_per_data = {};
    for (var i = 0; i < elem_per.length; i++) {
        if (elem_per[i].type == "checkbox") {

            (elem_per[i].checked) ? ant_per_data[elem_per[i].name] = "yes" : ant_per_data[elem_per[i].name] = "no";
        }
        else {
            ant_per_data[elem_per[i].name] = elem_per[i].value;
        }
    }

    let per_values = '';
    var length = Object.keys(ant_per_data).length - 1;
    var count = 0;

    for (var i in ant_per_data) {
        if (count == length) {
            per_values += i + "='" + ant_per_data[i] + "'";
        }
        else {
            per_values += i + "='" + ant_per_data[i] + "',";
        }
        count++;
    }
    /***********************************************************/
    
    /************Family Antecedents*****************************/
    let elem_fam = document.getElementById("patient_fam_ant").elements;
    let ant_fam_data = {};
    for (var i = 0; i < elem_fam.length; i++) {
        if (elem_fam[i].type == "checkbox") {

            (elem_fam[i].checked) ? ant_fam_data[elem_fam[i].name] = "yes" : ant_fam_data[elem_fam[i].name] = "no";
        }
        else {
            ant_fam_data[elem_fam[i].name] = elem_fam[i].value;
        }
    }

    let fam_values = '';
    var length = Object.keys(ant_fam_data).length - 1;
    var count = 0;

    for (var i in ant_fam_data) {
        if (count == length) {
            fam_values += i + "='" + ant_fam_data[i] + "'";
        }
        else {
            fam_values += i + "='" + ant_fam_data[i] + "',";
        }
        count++;
    }

    for(let [llave, valor] of Object.entries(camposDPValor)){
        if(valor === ''){
            camposDP[llave] = true;
        }
    }
    if(camposDP.address_HC &&
        camposDP.career_HC &&
        camposDP.etnia_HC &&
        camposDP.height_HC &&
        camposDP.insurance_HC &&
        camposDP.job_HC &&
        camposDP.lastName_HC &&
        camposDP.name_HC &&
        camposDP.nationality_HC &&
        camposDP.passport_HC &&
        camposDP.phone_HC &&
        camposDP.placeOB_HC &&
        camposDP.religion_HC &&
        camposDP.semester_HC &&
        camposDP.weight_HC){
        $.ajax({
            type: "POST",
            datatype: "html",
            url: "../controller/patient_update.php",
            data: {id: user_id, p_data:g_values,ant_per:per_values,ant_fam:fam_values},
    
            success: function (response) {
                if(response){
                    imprimirAlerta(document.querySelector('.mensaje-error'),'success','Actualizado Correctamente');
                    document.querySelectorAll('.formulario__grupo-correcto').forEach((clase) => {
                        clase.classList.remove('formulario__grupo-correcto');
                    });
                    document.querySelectorAll('.formulario__grupo-incorrecto').forEach((clase) => {
                        clase.classList.remove('formulario__grupo-incorrecto');
                    });
                }
                else {
                    imprimirAlerta(document.querySelector('.mensaje-error'),'error','Se produjo un error');
                }
            }
        });
    }else{
        imprimirAlerta(document.querySelector('.mensaje-error'),'error','Existen campos inválidos');
    }
}
/***********************************************************************************/