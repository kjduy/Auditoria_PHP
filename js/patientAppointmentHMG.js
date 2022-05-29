/**************************Populate Table******************************************/
reserv_table = $('#mg_table').DataTable({  
    
    "ajax":{            
        "url": "../controller/patient_mg_table.php", 
        "method": 'POST',
        "data": {id:$('#id_HC').val()},
        "dataSrc":""
    },
    "columns":[
        {"data": "id_CM"},
        {"data": "date_CM"},
        {"data": "hour_CM"},
        {"data": "doctor_CM"},
        {"defaultContent": "<a type='button' class='btn btn-warning text-light btnMirar'><i class='fas fa-eye'></i></a><a type='button' class='btn btn-success btnEditar'><i class='fas fa-edit'></i></a><button type='button' class='btn btn-danger'><i class='fas fa-trash'></i></button>"}
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
/************************************************************************************/
function loadForm(){
    let code = $('#id_HC').val();
    $.ajax({
        type: "POST",
        datatype: "html",
        url: "../controller/patient_mg_data.php",
        data: {id: code},
        success: function (response) {
            var obj = JSON.parse(response);
            $('#name_CM').html(obj.name)
            $('#cedula_CM').html(obj.cedula)
        }
    });
}

/**************************Open Medical App******************************************/
$(document).on("click", ".btnEditar", function(){		        
    fila = $(this).closest("tr");	        
    let code = $('#id_HC').val(); // el id del paciente, que sirve para recargar la pagina
    id = parseInt(fila.find('td:eq(0)').text()); //capturo el ID de la cita medica
    window.location.href='AppointmentMGMedical.php?link=patientAppointmentHMG.php&code='+code+'&msg='+id;
});

$(document).on("click", ".btnMirar", function(){		        
    fila = $(this).closest("tr");	       
    let code = $('#id_HC').val(); // el id del paciente, que sirve para recargar la pagina
    id = parseInt(fila.find('td:eq(0)').text()); //capturo el ID de la cita medica
    window.location.href='AppointmentMGView.php?link=patientAppointmentHMG.php&code='+code+'&msg='+id;
});

/***********************************************************************************/