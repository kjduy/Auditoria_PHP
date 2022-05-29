/**************************Validations*********************************************/
const formulario = document.querySelector('#nuevoPaciente');
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

/**************************New User*********************************************/
function new_patient(){
    document.getElementById("nuevoPaciente").reset();
    $('#modal_patient').modal('show');
}

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

/**************************Populate Table******************************************/
patient_table = $('#patient_table').DataTable({  
    "ajax":{            
        "url": "../controller/patient_table.php?", 
        "method": 'POST',
        "dataSrc":""
    },
    "columns":[
        {"data": "id_HC"},
        {"data": "name_HC"},
        {"data": "lastName_HC"},
        {"data": "cedula_HC"},
        {"data": "passport_HC"},
        {"data": "phone_HC"},
        {"data": "gender_HC"},
        {"defaultContent": "<a type='button' class='btn btn-success btnEditar'><i class='fas fa-notes-medical'></i></a><button type='button' class='btn btn-danger btnBorrar'><i class='fas fa-trash'></i></button>"}
    ],
    language: {
        "lengthMenu": "Mostrar _MENU_ registros",
        "zeroRecords": "No se encontraron resultados",
        "info": "",
        "infoEmpty": "",
        "infoFiltered": "",
        "sSearch": "Buscar:",
        "oPaginate": {
            "sFirst": "Primero",
            "sLast":"Último",
            "sNext":'<i class="fas fa-chevron-right"></i>',
            "sPrevious": '<i class="fas fa-chevron-left"></i>',
        },
        "sProcessing":"Procesando...",
    },
    //para usar los botones   
    responsive: "true",
    dom: 'Bfrtilp',       
    buttons:[ 
        {
            extend:    'excelHtml5',
            text:      '<i class="fas fa-file-excel"></i> ',
            titleAttr: 'Exportar a Excel',
            className: 'btn btn-success'
        },
        {
            extend:    'pdfHtml5',
            text:      '<i class="fas fa-file-pdf"></i> ',
            titleAttr: 'Exportar a PDF',
            className: 'btn btn-danger'
        },
        {
            extend:    'print',
            text:      '<i class="fa fa-print"></i> ',
            titleAttr: 'Imprimir',
            className: 'btn btn-dark'
        },
    ]	  
}); 
/**********************************************************************************/

/**************************Open Clinic History*************************************/
$(document).on("click", ".btnEditar", function(){		        
    fila = $(this).closest("tr");	        
    id = parseInt(fila.find('td:eq(0)').text()); //capturo el ID
    window.location.href='patientHC.php?msg='+id;
});
/***********************************************************************************/

/**************************Delete Patient**************************************************/
$(document).on("click", ".btnBorrar", function(){
    fila = $(this);           
    patient_id = parseInt($(this).closest('tr').find('td:eq(0)').text()) ;		       
    var respuesta = confirm("¿Está seguro de borrar el registro "+patient_id+"?");                
    if (respuesta) {            
        $.ajax({
            url: "../controller/patient_delete.php",
            type: "POST",
            datatype:"html",    
            data:  { id:patient_id},    
            success: function (response) {
                if(response){
                    imprimirAlerta(document.querySelector('.mensaje-borrar'),'success','Borrado Exitosamente');
                    patient_table.ajax.reload(null, false);
                }
                else {
                    imprimirAlerta(document.querySelector('.mensaje-borrar'),'error','Se produjo un error');
                }
            }
        });	
    }
});
/***************************************************************************************/