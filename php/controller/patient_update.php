<?php
require_once '../db/Db_commands.php';

$id =  $_POST['id'];
$personal_data =  $_POST['p_data'];
$ant_per =  $_POST['ant_per'];
$ant_fam =  $_POST['ant_fam'];


$controller = new Db_commands();

$query_command = "UPDATE hc_data SET $personal_data WHERE id_HC = '$id';
                  UPDATE hc_per SET $ant_per WHERE id_HC = '$id';
                  UPDATE hc_fam SET $ant_fam WHERE id_HC = '$id';";

$query = $controller->c_get_queries($query_command);

if($query){
    echo TRUE;
}
else{
    echo FALSE;
}