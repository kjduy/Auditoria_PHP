/**************************Ventana Secundaria*************************************/
function ventanaSecundaria (URL){ 
    window.open(URL,"Odontograma","width=1300,height=900,scrollbars=NO") 
} 
/**************************Validations*********************************************/
const formulario = document.querySelector('#formCM');
const inputs = document.querySelectorAll('#formCM input');

// Valores posibles a validar
const expresiones = {
	letras: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    numeros:/^\d+$/,
    bloodP:/^\d+\/\d+/
}
// Inputs
const campos = {
	temperature_CM:false,
    pulse_CM:false,
    breathe_CM:false,
    weight_CM:false,
    height_CM:false,
    bloodP_CM:false
}

const camposValor = {
	temperature_CM:'',
    pulse_CM:'',
    breathe_CM:'',
    weight_CM:'',
    height_CM:'',
    bloodP_CM:''
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "temperature_CM":
			validarCampo(expresiones.numeros, e.target, 'temperature_CM','Solo se admiten números');
            camposValor[e.target.name] = e.target.value;
		break;
		case "pulse_CM":
			validarCampo(expresiones.numeros, e.target, 'pulse_CM','Solo se admiten números');
            camposValor[e.target.name] = e.target.value;
		break;
		case "breathe_CM":
			validarCampo(expresiones.numeros, e.target, 'breathe_CM','Solo se admiten números');
            camposValor[e.target.name] = e.target.value;
		break;
		case "weight_CM":
			validarCampo(expresiones.numeros, e.target, 'weight_CM','Solo se admiten números');
            camposValor[e.target.name] = e.target.value;
		break;
		case "height_CM":
			validarCampo(expresiones.numeros, e.target, 'height_CM','Solo se admiten números');
            camposValor[e.target.name] = e.target.value;
		break;
		case "bloodP_CM":
			validarCampo(expresiones.bloodP, e.target, 'bloodP_CM','El formato de ingreso es n/n');
            camposValor[e.target.name] = e.target.value;
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
/**************************Populate Fields*************************************/
function loadForm(){
    var id = $("#id_CM").val();
    populateForm(id ,'formCM');	

}

function populateForm(p_id,idForm){
    $.ajax({
        type: "POST",
        datatype: "html",
        url: "../controller/app_mg_data.php",
        data: {id: p_id},
        success: function (response) {
            var obj = JSON.parse(response);
            populateInputs(obj,idForm);
            console.log(obj);
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
        if (elem[i].name == key) {
            let aux = [elem[i].type,elem[i].name]; 
            return aux;
        }
    }
    let aux = 'false';
    return aux;
}

/***********************************************************************************/

function update(){

    let elem = document.getElementById("formCM").elements;
    let user_id = elem[0].value;
    
    let data = {};
    //start on fifth element due to the first 4 elements are always the same
    for (var i = 5; i < elem.length; i++) {
        data[elem[i].name] = elem[i].value;
    }

    let app_values = '';
    var length = Object.keys(data).length - 1;
    var count = 0;

    for (var i in data) {
        if (count == length) {
            app_values += i + "='" + data[i] + "'";
        }
        else {
            app_values += i + "='" + data[i] + "',";
        }
        count++;
    }
    
    for(let [llave, valor] of Object.entries(camposValor)){
        if(valor === ''){
            campos[llave] = true;
        }
    }
    
    if(campos.temperature_CM &&
        campos.pulse_CM &&
        campos.breathe_CM &&
        campos.weight_CM &&
        campos.height_CM &&
        campos.bloodP_CM){
        $.ajax({
            type: "POST",
            datatype: "html",
            url: "../controller/app_mg_update.php",
            data: {id: user_id, values: app_values},
    
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