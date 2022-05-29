/**************************Populate Table******************************************/
reserv_table = $('#app_reservation').DataTable({  
    "ajax":{            
        "url": "../controller/reserv_table.php", 
        "method": 'POST',
        "dataSrc":""
    },
    "columns":[
        {"data": "id"},
        {"data": "date"},
        {"data": "hour"},
        {"data": "patient"},
        {"data": "doctor"},
        {"data": "type"},
        {"defaultContent": "<button type='button' class='btn btn-success btnConfirmar'><i class='fas fa-check'></i></button><button type='button' class='btn btn-danger btnCancelar'><i class='fas fa-times'></i></button>"}
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
}); 

/************************************************************************************/

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

$(document).on("click", ".btnConfirmar", function(){	

    fila = $(this);           
    app_id = parseInt($(this).closest('tr').find('td:eq(0)').text()) ;		       
    var respuesta = confirm("¿Está seguro que quiere confirmar la cita: "+app_id+"?");                
    if (respuesta) {            
        $.ajax({
            url: "../controller/reserv_confirm.php",
            type: "POST",
            datatype:"html",    
            data:  { id:app_id},    
            success: function (response) {
                if(response){
                    imprimirAlerta(document.querySelector('.mensaje-borrar'),'success','Cita Confirmada');
                    reserv_table.ajax.reload(null, false);
                }
                else {
                    imprimirAlerta(document.querySelector('.mensaje-borrar'),'error','Se produjo un error');
                }
            }
        });	
    }          	   
});

$(document).on("click", ".btnCancelar", function(){
    fila = $(this);           
    app_id = parseInt($(this).closest('tr').find('td:eq(0)').text()) ;		       
    var respuesta = confirm("¿Está seguro que quiere cancelar la cita: "+app_id+"?");                
    if (respuesta) {            
        $.ajax({
            url: "../controller/reserv_cancel.php",
            type: "POST",
            datatype:"html",    
            data:  { id:app_id},    
            success: function (response) {
                if(response){
                    imprimirAlerta(document.querySelector('.mensaje-borrar'),'success','Cita Cancelada');
                    reserv_table.ajax.reload(null, false);
                }
                else {
                    imprimirAlerta(document.querySelector('.mensaje-borrar'),'error','Se produjo un error');
                }
            }
        });	
    }
});