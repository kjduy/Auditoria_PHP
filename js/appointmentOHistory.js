/**************************Populate Table******************************************/
reserv_table = $('#od_table').DataTable({  
    "ajax":{            
        "url": "../controller/app_od_table.php", 
        "method": 'POST',
        "dataSrc":""
    },
    "columns":[
        {"data": "id_CO"},
        {"data": "date_CO"},
        {"data": "hour_CO"},
        {"data": "patient_CO"},
        {"data": "doctor_CO"},
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
/**************************Open Medical App*************************************/
$(document).on("click", ".btnEditar", function(){		        
    fila = $(this).closest("tr");	        
    id = parseInt(fila.find('td:eq(0)').text()); //capturo el ID
    window.location.href='AppointmentOMedical.php?link=AppointmentOHistory.php&code=null&msg='+id;
});

$(document).on("click", ".btnMirar", function(){		        
    fila = $(this).closest("tr");	        
    id = parseInt(fila.find('td:eq(0)').text()); //capturo el ID
    window.location.href='AppointmentOView.php?link=AppointmentOHistory.php&code=null&msg='+id;
});

/***********************************************************************************/