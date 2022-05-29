<?php 
require_once '../db/Db_commands.php';

$pdf_name = $_FILES['new_pdf']['name'];
$pdf_size = $_FILES['new_pdf']['size'];
$tmp_name = $_FILES['new_pdf']['tmp_name'];
$error = $_FILES['new_pdf']['error'];
$id = $_GET['id'];
$type = $_GET['type'];

if (validate_pdf($pdf_name, $pdf_size, $error)) {
    update_pdf($id,$type,$pdf_name, $tmp_name);
} else {
    $aux = ['Solo se permite archivos PDF, tamaño maximo 2MB', 'null'];
    echo json_encode($aux);
}

function validate_pdf($pdf_name, $pdf_size, $error)
{

    if ($error == 0) {

        if ($pdf_size > 2097152) {
            return false;
        } else {
            $pdf_ex = pathinfo($pdf_name, PATHINFO_EXTENSION); // pdf_ex = image extension
            $pdf_ex_lc = strtolower($pdf_ex);

            $allowed_exs = array("pdf");

            if (!in_array($pdf_ex_lc, $allowed_exs)) {

                return false;
            }
        }
    } else {
        return false;
    }

    return true;
}

function update_pdf($id, $type, $new_pdf, $tmp_name)
{
    $controller = new Db_commands();

    $pdf_ex = pathinfo($new_pdf, PATHINFO_EXTENSION); // img_ex = image extension
    $pdf_ex_lc = strtolower($pdf_ex);

    $new_pdf_name = uniqid("PDF-", true) . '.' . $pdf_ex_lc;
    $pdf_upload_path = '../../uploads/' . $new_pdf_name;
    move_uploaded_file($tmp_name, $pdf_upload_path);

    if ($type == 'AppointmentOHistory.php'){
        $query_command = "UPDATE app_od_data SET attach_CO ='$new_pdf_name' where id_CO = '$id'";
    }
    else{
        $query_command = "UPDATE app_mg SET attach_CM  ='$new_pdf_name' where id_CM = '$id'";
    }
      
    $query = $controller->c_get_query($query_command);

    if ($query) {
        //unlink('../uploads/'.$old_photo);  This line let you delete the old photo file 
        $aux = ['exito', $pdf_upload_path];
        echo json_encode($aux);
    } else {
        $aux = ['fracaso', 'null'];
        echo json_encode($aux);
    }
}