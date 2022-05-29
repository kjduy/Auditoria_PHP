function draw(){
    data_chart('graph_1');
    data_chart('graph_2');
}

function zone_3(){
    let date = $("#date_3").val();
    $.ajax({
        type: "POST",
        datatype: "html",
        url: "../controller/bar_data.php",
        data: {date: date},
        success: function (response) {
            var result = JSON.parse(response);
            var dataPoints =[];
            dataPoints.push({y: parseInt(result['mg']), label:'Medicina General'});
            dataPoints.push({y: parseInt(result['od']), label:'Odontologia'});
            draw_bar_chart('graph_3','Citas en: '+date,dataPoints);
        }
    });
}

function zone_4(){
    let d_start = $("#start_4").val();
    let d_end = $("#end_4").val();

    $.ajax({
        type: "POST",
        datatype: "html",
        url: "../controller/bar_data_range.php",
        data: {start: d_start, end:d_end},
        success: function (response) {
            var result = JSON.parse(response);
            var dataPoints =[];
            dataPoints.push({y: parseInt(result['mg']), label:'Medicina General'});
            dataPoints.push({y: parseInt(result['od']), label:'Odontologia'});
            draw_bar_chart('graph_4','Citas entre: '+d_start+' y '+ d_end, dataPoints);
        }
    });
}

function data_chart(id) {
    $.ajax({
        type: "POST",
        datatype: "html",
        url: "../controller/pie_data.php",
        data: {id: id},
        success: function (response) {
            var result = JSON.parse(response);
            var dataPoints =[];
            for(var i = 0; i < result.length; i++){
                dataPoints.push({y: parseInt(result[i].y), label:result[i].label});
            }
            draw_pie_chart(id,dataPoints);
        }
    });
}

function draw_pie_chart(graph_id,data_col){
    var graph_id = new CanvasJS.Chart(graph_id, {
        animationEnabled: true,
        exportEnabled: true,
        data: [{
            type: "pie",
            startAngle: 240,
            yValueFormatString: "###",
            indexLabel: "{label}' : '{y}",
            dataPoints: data_col
        }]
    });
    graph_id.render();
}

function draw_bar_chart(graph_id,title,data_col){
    var graph_id = new CanvasJS.Chart(graph_id, {
        animationEnabled: true,
        exportEnabled: true,
        theme: "light2", // "light1", "light2", "dark1", "dark2"
        title:{
            text: title
        },
        axisY: {
            title: "Cantidad"
        },
        data: [{        
            type: "column",  
            dataPoints: data_col
        }]
    });
    graph_id.render();
}