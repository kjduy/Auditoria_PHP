/**************************Populate Fields*************************************/
function loadForm(){
    var id = $("#id_CO").val();
    populateForm(id ,'form_odt');	

}

function populateForm(p_id,idForm){
    $.ajax({
        type: "POST",
        datatype: "html",
        url: "../controller/app_od_gr.php",
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

    let elem = document.getElementById("form_odt").elements;
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

    $.ajax({
        type: "POST",
        datatype: "html",
        url: "../controller/app_od_update.php",
        data: {id: user_id, values: app_values, msg:'gr'},

        success: function (response) {
            if(response){
                document.getElementById("demo").innerHTML = "Datos Actualizados Correctamente";
            }
            else {
                document.getElementById("demo").innerHTML = "Ha ocurrido un problema";
            }
        }
    });
}