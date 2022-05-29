<?php 
    session_start();
    if(empty($_SESSION['active'])){
        session_destroy();
        header('location: ../html/login.html');
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="shortcut icon" href="../../img/icono.png">
    <?php include('../../includes/linkStyles.php');?>
    <title>CBE-ESPE</title>
</head>

<body onload="loadForm()">
    <div class="d-flex" id="content-wrapper">
        <div class="w-100">
            <!-- Page Content -->
            <section id="content" class="bg-light w-100">
                <div class="container">
                <h1 class="text-center text-dark">Anexos</h1>       
                <h3>Subir Archivo (Formato PDF)</h3>
                <p id="demo"></p>
                <form id="pdf_upload">
                    <input type="hidden" id="id" name="id" value = "<?php echo $_GET['msg']?>"> 
                    <input type="hidden" id="link" name="link" value = "<?php echo $_GET['link']?>"> 
                    <input type="file" name="new_pdf" ><br><br>
                    <input id="btn_update" type="submit" name="submit" value="Actualizar">
                </form>
                <br>
                <iframe id="pdf_frame" src="" width="80%" height="500px"></iframe>    
                </div>
            </section><!-- Fin Page Content -->
        </div>
    </div>

    <?php include('../../includes/linkScripts.php');?>

    <!-- Propio -->
    <script src="../../js/attachment.js"></script>
</body>
</html>
