/**************************Validations*********************************************/
const formulario = document.querySelector('#nuevoMedico');
const inputs = document.querySelectorAll('#nuevoMedico input');

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
	name_Dc: false,
	lastName_Dc: false,
	user_Dc: false,
	pass_Dc: false,
	cedula_Dc: false,
	phone_Dc: false,
	email_Dc: false,
	address_Dc: false,
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "name_Dc":
			validarCampo(expresiones.letras, e.target, 'name_Dc','Solo se admiten letras');
		break;
		case "lastName_Dc":
			validarCampo(expresiones.letras, e.target, 'lastName_Dc','Solo se admiten letras');
		break;
		case "user_Dc":
			validarCampo(expresiones.usuario, e.target, 'user_Dc','Solo letras, numeros, guion y guion_bajo');
		break;
		case "pass_Dc":
            validarCampo(expresiones.password, e.target, 'pass_Dc','Minimo 6 caracteres, 1 letra, 1 numero');
		break;
		case "cedula_Dc":
			if(cedula_val(e.target.value)){
                document.getElementById(`grupo_cedula_Dc`).classList.remove('formulario__grupo-incorrecto');
                document.getElementById(`grupo_cedula_Dc`).classList.add('formulario__grupo-correcto');
                campos['cedula_Dc'] = true;
            }else{
                document.getElementById(`grupo_cedula_Dc`).classList.add('formulario__grupo-incorrecto');
                document.getElementById(`grupo_cedula_Dc`).classList.remove('formulario__grupo-correcto');
                imprimirAlerta(document.getElementById(`grupo_cedula_Dc`),'error','Cedula Invalida');
                campos['cedula_Dc'] = false;
            }
		break;
		case "phone_Dc":
			validarCampo(expresiones.telefono, e.target, 'phone_Dc','Teléfono incorrecto o invalido');
		break;
		case "email_Dc":
			validarCampo(expresiones.correo, e.target, 'email_Dc','Correo electrónico incompleto o no valido');
		break;
		case "address_Dc":
			validarCampo(expresiones.address, e.target, 'address_Dc','Dirección no valida');
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
function calcularEdad(fecha) {
    var fechaActual = new Date();
    var fechaNacimiento = new Date(fecha);
    var edad = fechaActual.getFullYear() - fechaNacimiento.getFullYear();
    var m = fechaActual.getMonth() - fechaNacimiento.getMonth();

    if (m < 0 || (m === 0 && fechaActual.getDate() < fechaNacimiento.getDate())) {
        edad--;
    }
    return edad;
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
function new_doctor() {
    document.querySelector('#cedula_Dc').disabled = false;
    var x = document.getElementById("update");
    var y = document.getElementById("create");
    x.style.display = "none";
    y.style.display = "block";
    document.getElementById("nuevoMedico").reset();
    document.getElementById("availability_days").reset();
    document.getElementById("availability_hours").reset();
    $('#modal_doctor').modal('show');
}

/**************************Reg User*********************************************/
function register() {

    let elem = document.getElementById("nuevoMedico").elements;
    let general_data = {};
    let user_cedula;
    let username;

    //Start i=1 to no include id, its not necesary for register, id is given automatically on db
    for (var i = 1; i < elem.length; i++) {
        if (elem[i].type == "password") {
            general_data[elem[i].name] = CryptoJS.MD5(elem[i].value);
        }
        else if (elem[i].name == "cedula_Dc") {
            general_data[elem[i].name] = elem[i].value;
            user_cedula = elem[i].value;
        }
        else if( elem[i].name == "user_Dc"){
            general_data[elem[i].name] = elem[i].value;
            username = elem[i].value;
        }
        else {
            general_data[elem[i].name] = elem[i].value;
        }
    }

    let data_keys = '';
    let data_values = '';
    var data_length = Object.keys(general_data).length - 1;
    var count = 0;

    for (var i in general_data) {
        if (count == data_length) {
            data_keys += i;
            data_values += "'" + general_data[i] + "'";
        }
        else {
            data_keys += i + ",";
            data_values += "'" + general_data[i] + "',";
        }
        count++;
    }


     /****************Days**************** */
     let elem_day = document.getElementById("availability_days").elements;
     let days_data = {};
 
     for (var i = 0; i < elem_day.length; i++) {
        (elem_day[i].checked) ? days_data[elem_day[i].name] = "yes" : days_data[elem_day[i].name] = "no";
     }
 
     let day_keys = '';
     let day_values = '';
     var day_length = Object.keys(days_data).length - 1;
     count = 0;
 
     for (var i in days_data) {
         if (count == day_length) {
             day_keys += i;
             day_values += "'" + days_data[i] + "'";
         }
         else {
             day_keys += i + ",";
             day_values += "'" + days_data[i] + "',";
         }
         count++;
     }
    /***************************************/
    
    /****************Hours******************/
    var hours = {};
    hours['07:00'] = 'no'; hours['07:20'] = 'no'; hours['07:40'] = 'no';
    hours['08:00'] = 'no'; hours['08:20'] = 'no'; hours['08:40'] = 'no';
    hours['09:00'] = 'no'; hours['09:20'] = 'no'; hours['09:40'] = 'no';
    hours['10:00'] = 'no'; hours['10:20'] = 'no'; hours['10:40'] = 'no';
    hours['11:00'] = 'no'; hours['11:20'] = 'no'; hours['11:40'] = 'no';
    hours['12:00'] = 'no'; hours['12:20'] = 'no'; hours['12:40'] = 'no';
    hours['13:00'] = 'no'; hours['13:20'] = 'no'; hours['13:40'] = 'no';
    hours['14:00'] = 'no'; hours['14:20'] = 'no'; hours['14:40'] = 'no';
    hours['15:00'] = 'no'; hours['15:20'] = 'no'; hours['15:40'] = 'no';
    hours['16:00'] = 'no'; hours['16:20'] = 'no'; hours['16:40'] = 'no';
    hours['17:00'] = 'no'; hours['17:20'] = 'no'; hours['17:40'] = 'no';
    hours['18:00'] = 'no'; hours['18:20'] = 'no'; hours['18:40'] = 'no';

    let elem_hour = document.getElementById("availability_hours").elements;

    for (var i = 0; i < elem_hour.length; i++) {
        if (elem_hour[i].checked) {
            setHours(elem_hour[i].name, hours);
        }
    }

    let hour_keys = '';
    let hour_values = '';
    var length = Object.keys(hours).length - 1;
    var count = 0;

    for (var i in hours) {
        if (count == length) {
            hour_keys += "`" + i +"`";
            hour_values += "'" + hours[i] + "'";

        } else {
            hour_keys += "`"+i + "`,";
            hour_values += "'" + hours[i] + "', ";
        }
        count++;
    }

    function setHours(value, hours) {
        switch (value) {
            case "07_00":
                hours['07:00'] = 'yes'; hours['07:20'] = 'yes'; hours['07:40'] = 'yes';
                hours['08:00'] = 'yes'; hours['08:20'] = 'yes'; hours['08:40'] = 'yes';
                break;

            case "09_00":
                hours['09:00'] = 'yes'; hours['09:20'] = 'yes'; hours['09:40'] = 'yes';
                hours['10:00'] = 'yes'; hours['10:20'] = 'yes'; hours['10:40'] = 'yes';
                break;

            case "11_00":
                hours['11:00'] = 'yes'; hours['11:20'] = 'yes'; hours['11:40'] = 'yes';
                hours['12:00'] = 'yes'; hours['12:20'] = 'yes'; hours['12:40'] = 'yes';
                break;

            case "13_00":
                hours['13:00'] = 'yes'; hours['13:20'] = 'yes'; hours['13:40'] = 'yes';
                hours['14:00'] = 'yes'; hours['14:20'] = 'yes'; hours['14:40'] = 'yes';
                break;

            case "15_00":
                hours['15:00'] = 'yes'; hours['15:20'] = 'yes'; hours['15:40'] = 'yes';
                hours['16:00'] = 'yes'; hours['16:20'] = 'yes'; hours['16:40'] = 'yes';
                break;

            case "17_00":
                hours['17:00'] = 'yes'; hours['17:20'] = 'yes'; hours['17:40'] = 'yes';
                hours['18:00'] = 'yes'; hours['18:20'] = 'yes'; hours['18:40'] = 'yes';
                break;
        }
    }
    /***************************************/

   // document.getElementById("demo").innerHTML = 'Datos Generales: <br>'+data_keys+'<br>'+data_values+'<br>Disponibilidad Dias: <br>'+day_keys+'<br>'+day_values+'<br>Disponibilidad Horas: <br>'+hour_keys+'<br>'+hour_values;
    
    const edad = calcularEdad(general_data['date_Dc']);
    
    if(campos.name_Dc && campos.lastName_Dc && campos.user_Dc && campos.pass_Dc && campos.cedula_Dc && campos.phone_Dc && campos.email_Dc && campos.address_Dc && general_data['gender_Dc']!='' && general_data['ocuppation_Dc']!='' && general_data['date_Dc']!=''){
        if(edad >= 18){
            $.ajax({
                type: "POST",
                datatype: "html",
                url: "../controller/doctor_reg.php",
                data: {g_keys: data_keys , g_values:data_values, cedula:user_cedula, user: username, d_keys:day_keys, d_values:day_values, h_keys:hour_keys, h_values:hour_values},
        
                success: function (response) {
                    //document.getElementById("demo").innerHTML = response;
        
                    if(response == 'exito'){
                        imprimirAlerta(document.querySelector('.mensaje-error'),'success','Guardado Exitosamente');
                        document.getElementById("nuevoMedico").reset();
                        document.getElementById("availability_days").reset();
                        document.getElementById("availability_hours").reset();
                        document.querySelectorAll('.formulario__grupo-correcto').forEach((clase) => {
                            clase.classList.remove('formulario__grupo-correcto');
                        });
                        doctor_table.ajax.reload(null, false);
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
        }else {
            imprimirAlerta(document.querySelector('.mensaje-error'),'error','Debes ser mayor de 18 años');
        }
    }else{
        imprimirAlerta(document.querySelector('.mensaje-error'),'error','Existen campos vacios');
    }
}
/**********************************************************************************/



/**************************Populate Table******************************************/
doctor_table = $('#doctor_table').DataTable({  
    "ajax":{            
        "url": "../controller/doctor_table.php", 
        "method": 'POST',
        "dataSrc":""
    },
    "columns":[
        {"data": "id_Dc"},
        {"data": "name_Dc"},
        {"data": "lastName_Dc"},
        {"data": "user_Dc"},
        {"data": "cedula_Dc"},
        {"data": "ocuppation_Dc"},
        {"defaultContent": "<button type='button' class='btn btn-success btnEditar'><i class='fas fa-edit'></i></button><button type='button' class='btn btn-danger btnBorrar'><i class='fas fa-trash'></i></button>"}
        
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

/***********************************************************************************/

/**************************Populate Modals******************************************/

$(document).on("click", ".btnEditar", function(){		        
    var x = document.getElementById("update");
    var y = document.getElementById("create");
    x.style.display = "block";
    y.style.display = "none";
    fila = $(this).closest("tr");	        
    id = parseInt(fila.find('td:eq(0)').text()); //capturo el ID
    $('#modal_doctor').modal('show');	
    //Cambiar el titulo del modal
    document.querySelector('#modalTitleLabel').textContent = "Editar";
    //Deshabilitar el input de cedula
    document.querySelector('#cedula_Dc').disabled = true;

    populateModal(id, 'nuevoMedico','doctor');
    populateModal(id,'availability_days','days');
    populateModal(id,'availability_hours','hours');		            	   
});

function populateModal(p_id,idModal,msg){
    $.ajax({
        type: "POST",
        datatype: "html",
        url: "../controller/doctor_data.php?msg="+msg,
        data: {id: p_id},
        success: function (response) {
            var obj = JSON.parse(response);
            populateInputs(obj,idModal);
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
/***************************************************************************************/


/**************************Update User**************************************************/

function update(){

    let elem = document.getElementById("nuevoMedico").elements;
    let general_data = {};
    let user_id = elem[0].value;

    for (var i = 1; i < elem.length; i++) {
        if (elem[i].type == "password" && elem[i].value == '') {
            continue;
        }
        else if(elem[i].type == "password" && elem[i].value != ' '){
            general_data[elem[i].name] = CryptoJS.MD5(elem[i].value);
        }
        else{
            general_data[elem[i].name] = elem[i].value;
        }
    }

    let data_values = '';
    var length = Object.keys(general_data).length - 1;
    var count = 0;

    for (var i in general_data) {
        if (count == length) {
            data_values += i + "='" + general_data[i] + "'";
        }
        else {
            data_values += i + "='" + general_data[i] + "',";
        }
        count++;
    }

    /****************Days**************** */
    let elem_day = document.getElementById("availability_days").elements;
    let days_data = {};

    for (var i = 0; i < elem_day.length; i++) {
    (elem_day[i].checked) ? days_data[elem_day[i].name] = "yes" : days_data[elem_day[i].name] = "no";
    }
 
    let day_values = '';
    var length = Object.keys(days_data).length - 1;
    var count = 0;

    for (var i in days_data ) {
        if (count == length) {
            day_values += i + "='" + days_data[i] + "'";
        }
        else {
            day_values += i + "='" + days_data[i] + "',";
        }
        count++;
    }
    /***************************************/
    
    /****************Hours******************/
    var hours = {};
    hours['07:00'] = 'no'; hours['07:20'] = 'no'; hours['07:40'] = 'no';
    hours['08:00'] = 'no'; hours['08:20'] = 'no'; hours['08:40'] = 'no';
    hours['09:00'] = 'no'; hours['09:20'] = 'no'; hours['09:40'] = 'no';
    hours['10:00'] = 'no'; hours['10:20'] = 'no'; hours['10:40'] = 'no';
    hours['11:00'] = 'no'; hours['11:20'] = 'no'; hours['11:40'] = 'no';
    hours['12:00'] = 'no'; hours['12:20'] = 'no'; hours['12:40'] = 'no';
    hours['13:00'] = 'no'; hours['13:20'] = 'no'; hours['13:40'] = 'no';
    hours['14:00'] = 'no'; hours['14:20'] = 'no'; hours['14:40'] = 'no';
    hours['15:00'] = 'no'; hours['15:20'] = 'no'; hours['15:40'] = 'no';
    hours['16:00'] = 'no'; hours['16:20'] = 'no'; hours['16:40'] = 'no';
    hours['17:00'] = 'no'; hours['17:20'] = 'no'; hours['17:40'] = 'no';
    hours['18:00'] = 'no'; hours['18:20'] = 'no'; hours['18:40'] = 'no';

    let elem_hour = document.getElementById("availability_hours").elements;

    for (var i = 0; i < elem_hour.length; i++) {
        if (elem_hour[i].checked) {
            setHours(elem_hour[i].name, hours);
        }
    }

    let hour_values = '';
    var length = Object.keys(hours).length - 1;
    var count = 0;

    for (var i in hours) {
        if (count == length) {
            hour_values += "`" + i +"`" + "='" + hours[i] + "'";
        }
        else {
            hour_values += "`" + i +"`" + "='" + hours[i] + "',";
        }
        count++;
    }

    function setHours(value, hours) {
        switch (value) {
            case "07_00":
                hours['07:00'] = 'yes'; hours['07:20'] = 'yes'; hours['07:40'] = 'yes';
                hours['08:00'] = 'yes'; hours['08:20'] = 'yes'; hours['08:40'] = 'yes';
                break;

            case "09_00":
                hours['09:00'] = 'yes'; hours['09:20'] = 'yes'; hours['09:40'] = 'yes';
                hours['10:00'] = 'yes'; hours['10:20'] = 'yes'; hours['10:40'] = 'yes';
                break;

            case "11_00":
                hours['11:00'] = 'yes'; hours['11:20'] = 'yes'; hours['11:40'] = 'yes';
                hours['12:00'] = 'yes'; hours['12:20'] = 'yes'; hours['12:40'] = 'yes';
                break;

            case "13_00":
                hours['13:00'] = 'yes'; hours['13:20'] = 'yes'; hours['13:40'] = 'yes';
                hours['14:00'] = 'yes'; hours['14:20'] = 'yes'; hours['14:40'] = 'yes';
                break;

            case "15_00":
                hours['15:00'] = 'yes'; hours['15:20'] = 'yes'; hours['15:40'] = 'yes';
                hours['16:00'] = 'yes'; hours['16:20'] = 'yes'; hours['16:40'] = 'yes';
                break;

            case "17_00":
                hours['17:00'] = 'yes'; hours['17:20'] = 'yes'; hours['17:40'] = 'yes';
                hours['18:00'] = 'yes'; hours['18:20'] = 'yes'; hours['18:40'] = 'yes';
                break;
        }
    }

    //document.getElementById("demo").innerHTML = 'ID: '+user_id +'<br>Datos Generales: <br>'+data_values+'<br>Disponibilidad Dias: <br>'+day_values+'<br>Disponibilidad Horas: <br>'+hour_values;
    $.ajax({
        type: "POST",
        datatype: "html",
        url: "../controller/doctor_update.php",
        data: {id: user_id,g_values:data_values,d_values:day_values,h_values:hour_values},

        success: function (response) {
            if(response){
                imprimirAlerta(document.querySelector('.mensaje-error'),'success','Actualizado Correctamente');

                document.getElementById("nuevoMedico").reset();
                document.getElementById("availability_days").reset();
                document.getElementById("availability_hours").reset();
                document.getElementById("id_Dc").value = "NULL";
                doctor_table.ajax.reload(null, false);
            }
            else {
                imprimirAlerta(document.querySelector('.mensaje-error'),'error','Se produjo un error');
            }
        }
    });
}

/***************************************************************************************/

/**************************Delete User**************************************************/
$(document).on("click", ".btnBorrar", function(){
    fila = $(this);           
    user_id = parseInt($(this).closest('tr').find('td:eq(0)').text()) ;		       
    var respuesta = confirm("¿Está seguro de borrar el registro "+user_id+"?");                
    if (respuesta) {            
        $.ajax({
          url: "../controller/doctor_delete.php",
          type: "POST",
          datatype:"html",    
          data:  { id:user_id},    
          success: function (response) {
            if(response){
                imprimirAlerta(document.querySelector('.mensaje-borrar'),'success','Borrado Exitosamente');
                doctor_table.ajax.reload(null, false);
            }
            else {
                imprimirAlerta(document.querySelector('.mensaje-borrar'),'error','Se produjo un error');
            }
        }
        });	
    }
 });
/***************************************************************************************/