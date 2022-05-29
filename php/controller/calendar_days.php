<?php
require_once '../db/Db_commands.php';

$controller = new Db_commands();
$id =  $_POST['id'];

$query_command = "SELECT * FROM calendar_days WHERE id_Dc = '$id'";
$query = $controller->c_get_query($query_command);
$object = mysqli_fetch_object($query);

$aux = [];
foreach($object as $key => $value) {  
    if($value == 'yes'){
        array_push($aux,switch_day($key));        
    }
}

$dow = '[';
for($i=0; $i<count($aux); $i++){
    if($i==count($aux)-1){
        $dow.= $aux[$i];
    }else{
        $dow.= $aux[$i].',';
    }
}
$dow .= ']';

echo $dow;

function switch_day($day) {
    switch ($day) {
        case "monday":
            return 1;
            break;
        case "tuesday":
            return 2;
            break;
        case "wednesday":
            return 3;
            break;
        case "thursday":
            return 4;
            break;
        case "friday":
            return 5;
            break;
        case "saturday":
            return 6;
            break;
        case "sunday":
            return 7;
            break;
    }    
}