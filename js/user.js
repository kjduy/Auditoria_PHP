/**************************Validations*********************************************/
const formulario = document.querySelector('#nuevoUsuario');
const inputs = document.querySelectorAll('#nuevoUsuario input');

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
	name_Prof: false,
	lastName_Prof: false,
	user_Prof: false,
	pass_Prof: false,
	cedula_Prof: false,
	phone_Prof: false,
	email_Prof: false,
	address_Prof: false,
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "name_Prof":
			validarCampo(expresiones.letras, e.target, 'name_Prof','Solo se admiten letras');
		break;
		case "lastName_Prof":
			validarCampo(expresiones.letras, e.target, 'lastName_Prof','Solo se admiten letras');
		break;
		case "user_Prof":
			validarCampo(expresiones.usuario, e.target, 'user_Prof','Solo letras, numeros, guion y guion_bajo');
		break;
		case "pass_Prof":
            validarCampo(expresiones.password, e.target, 'pass_Prof','Minimo 6 caracteres, 1 letra, 1 numero');
		break;
		case "cedula_Prof":
			if(cedula_val(e.target.value)){
                document.getElementById(`grupo_cedula_Prof`).classList.remove('formulario__grupo-incorrecto');
                document.getElementById(`grupo_cedula_Prof`).classList.add('formulario__grupo-correcto');
                campos['cedula_Prof'] = true;
            }else{
                document.getElementById(`grupo_cedula_Prof`).classList.add('formulario__grupo-incorrecto');
                document.getElementById(`grupo_cedula_Prof`).classList.remove('formulario__grupo-correcto');
                imprimirAlerta(document.getElementById(`grupo_cedula_Prof`),'error','Cedula Invalida');
                campos['cedula_Prof'] = false;
            }
		break;
		case "phone_Prof":
			validarCampo(expresiones.telefono, e.target, 'phone_Prof','Teléfono incorrecto o invalido');
		break;
		case "email_Prof":
			validarCampo(expresiones.correo, e.target, 'email_Prof','Correo electrónico incompleto o no valido');
		break;
		case "address_Prof":
			validarCampo(expresiones.address, e.target, 'address_Prof','Dirección no valida');
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
function new_user(){
    document.querySelector('#cedula_Prof').disabled = false;
    document.querySelector('#user_Prof').disabled = false;

    var x = document.getElementById("update");
    var y = document.getElementById("create");
    x.style.display = "none";
    y.style.display = "block";
    document.getElementById("nuevoUsuario").reset();
    $('#modal_user').modal('show');
}

/**************************Reg User*********************************************/
function register(e) {
    let elem = document.getElementById("nuevoUsuario").elements;
    let data = {};
    let user_cedula;
    let username;

    //Start i=1 to no include id, its not necesary for register, id is given automatically  on db
    for (var i = 1; i < elem.length; i++) {
        if(elem[i].type == "password"){
            data[elem[i].name] = CryptoJS.MD5(elem[i].value);
        }
        else if(elem[i].name == "cedula_Prof"){
            data[elem[i].name] = elem[i].value;
            user_cedula = elem[i].value;
        }
        else if(elem[i].name == "user_Prof"){
            data[elem[i].name] = elem[i].value;
            username = elem[i].value;
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

    const edad = calcularEdad(data['date_Prof']);
    
    if(campos.name_Prof && campos.lastName_Prof && campos.user_Prof && campos.pass_Prof && campos.cedula_Prof && campos.phone_Prof && campos.email_Prof && campos.address_Prof && data['gender_Prof']!='' && data['userType_Prof']!='' && data['date_Prof']!=''){
        if(edad >= 18){
            $.ajax({
                type: "POST",
                datatype: "html",
                url: "../controller/user_reg.php",
                data: {keys: sql_keys ,values:sql_values, cedula:user_cedula, user:username},
        
                success: function (response) {
                    if(response == 'exito'){
                        imprimirAlerta(document.querySelector('.mensaje-error'),'success','Guardado Exitosamente');
                        document.getElementById("nuevoUsuario").reset();
                        document.querySelectorAll('.formulario__grupo-correcto').forEach((clase) => {
                            clase.classList.remove('formulario__grupo-correcto');
                        });
                        let tableName = $('#tableName').val();
                        select_table(tableName);
                    }
                    else if(response == 'duplicado'){
                        imprimirAlerta(document.querySelector('.mensaje-error'),'error','La cedula o el nombre de usuario ya existen');
                        document.getElementById(`grupo_cedula_Prof`).classList.add('formulario__grupo-incorrecto');
                        document.getElementById(`grupo_user_Prof`).classList.add('formulario__grupo-incorrecto');
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
        imprimirAlerta(document.querySelector('.mensaje-error'),'error','Existen campos vacíos');
    }
    
}

/**********************************************************************************/

/**************************Populate Table******************************************/
user_table = $('#user_table').DataTable({  
    "ajax":{            
        "url": "../controller/user_table.php?msg=user", 
        "method": 'POST',
        "dataSrc":""
    },
    "columns":[
        {"data": "id_Prof"},
        {"data": "name_Prof"},
        {"data": "lastName_Prof"},
        {"data": "user_Prof"},
        {"data": "cedula_Prof"},
        {"data": "userType_Prof"},
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

nurse_table = $('#nurse_table').DataTable({  
    "ajax":{            
        "url": "../controller/user_table.php?msg=nurse", 
        "method": 'POST',
        "dataSrc":""
    },
    "columns":[
        {"data": "id_Prof"},
        {"data": "name_Prof"},
        {"data": "lastName_Prof"},
        {"data": "user_Prof"},
        {"data": "cedula_Prof"},
        {"data": "phone_Prof"},
        {"data": "email_Prof"},
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


secretary_table = $('#secretary_table').DataTable({  
    "ajax":{            
        "url": "../controller/user_table.php?msg=secretary", 
        "method": 'POST',
        "dataSrc":""
    },
    "columns":[
        {"data": "id_Prof"},
        {"data": "name_Prof"},
        {"data": "lastName_Prof"},
        {"data": "user_Prof"},
        {"data": "cedula_Prof"},
        {"data": "phone_Prof"},
        {"data": "email_Prof"},
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
    $('#modal_user').modal('show');	
    //Cambiar el titulo del modal
    document.querySelector('#modalTitleLabel').textContent = "Editar";
    //Deshabilitar el input
    document.querySelector('#cedula_Prof').disabled = true;
    document.querySelector('#user_Prof').disabled = true;

    populateModal(id, 'nuevoUsuario');		            	   
});

function populateModal(p_id,idModal){
    $.ajax({
        type: "POST",
        datatype: "html",
        url: "../controller/user_data.php",
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
        if (field !='false'){
            $("#"+idForm+" #" +field[1]).val(obj[key]);
        }
    }
}

function match_key_id(key,elem){
    for (var i = 0; i < elem.length; i++) {
        if (elem[i].name == key && elem[i].name != 'pass_Prof') {
            let aux = [elem[i].type,elem[i].name]; 
            return aux;
        }
    }
    let aux = 'false';
    return aux;
}
/***************************************************************************************/

/**************************Update User**************************************************/

function update(){

    let elem = document.getElementById("nuevoUsuario").elements;
    let user_id = elem[0].value;
    
    let data = {};
    for (var i = 1; i < elem.length; i++) {
        
        if (elem[i].type == "password" && elem[i].value == '') {
            continue;
        }
        else if(elem[i].type == "password" && elem[i].value != ' '){
            data[elem[i].name] = CryptoJS.MD5(elem[i].value);
        }
        else{
            data[elem[i].name] = elem[i].value;
        }
    }

    let sql_values = '';
    var length = Object.keys(data).length - 1;
    var count = 0;

    for (var i in data) {
        if (count == length) {
            sql_values += i + "='" + data[i] + "'";
        }
        else {
            sql_values += i + "='" + data[i] + "',";
        }
        count++;
    }
    //document.getElementById("demo").innerHTML = sql_values;

    $.ajax({
        type: "POST",
        datatype: "html",
        url: "../controller/user_update.php",
        data: {id: user_id , values:sql_values},

        success: function (response) {
            if(response){
                imprimirAlerta(document.querySelector('.mensaje-error'),'success','Actualizado Correctamente');
                document.getElementById("nuevoUsuario").reset();
                document.getElementById("id_Prof").value = "NULL";
                let tableName = $('#tableName').val();
                select_table(tableName);
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
            url: "../controller/user_delete.php",
            type: "POST",
            datatype:"html",    
            data:  { id:user_id},    
            success: function (response) {
                if(response){
                    imprimirAlerta(document.querySelector('.mensaje-borrar'),'success','Borrado Exitosamente');
                    let tableName = $('#tableName').val();
                    select_table(tableName);
                }
                else {
                    imprimirAlerta(document.querySelector('.mensaje-borrar'),'error','Se produjo un error');
                }
            }
        });	
    }
});
/***************************************************************************************/

/***************************************************************************************/

function select_table(table_id){

    switch(table_id){
        case "user_table":
            user_table.ajax.reload(null, false);
            break;
        case "nurse_table":
            nurse_table.ajax.reload(null, false);
            break;
        case "secretary_table":
            secretary_table.ajax.reload(null, false);
            break;
    }

}