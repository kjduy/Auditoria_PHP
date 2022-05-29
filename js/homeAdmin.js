function loadForm(){
    getTotals('pacienteTotal','patient');
    getTotals('mgTotal','mg');
    getTotals('odTotal','od');
    getTotals('secretarioTotal','secretary');
    getTotals('enfermeroTotal','nurse');
}

function getTotals(field_id,msg) {
    $.ajax({
        type: "POST",
        url: "../controller/homeAdmin.php",
        data: {msg: msg},
        success: function (response) {
            $("#"+field_id).append(response);
        }
    });
}


