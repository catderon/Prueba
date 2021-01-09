<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geometria Prueba</title>
    <link href="home_files/bootstrap.css" rel="stylesheet">
</head>
<body style="background-color: #eeeeee">
    <div class="container">
        <form method=POST><br>
            <h1 class="text-success">CALIFICACION FINAL LOGICA COMPUTACIONAL</h1>
            <span class="bg-primary">3 Parciales</span><small> (55%)</small><br>
            Parcial 1 Nota:<input type=number name=parcial1 min=0 max=10 class="form-control" value='<?php echo rand(1,10);?>' style="width:10%;" required><br>
            Parcial 2 Nota:<input type=number name=parcial2 min=0 max=10 class="form-control" value='<?php echo rand(1,10);?>' style="width:10%;" required><br>
            Parcial 3 Nota:<input type=number name=parcial3 min=0 max=10 class="form-control" value='<?php echo rand(1,10);?>' style="width:10%;" required><br>
            <span class="bg-primary">1 Examen</span><small> (30%)</small><br>
            Examen Nota:<input type=number name=examen min=0 max=10 class="form-control" value='<?php echo rand(1,10);?>' style="width:10%;" required><br>
            <span class="bg-primary">1 Trabajo</span><small> (15%)</small><br>
            Trabajo Nota:<input type=number name=trabajo min=0 max=10 class="form-control" value='<?php echo rand(1,10);?>' style="width:10%;" required><br>
            
            <input type=submit name=ok value=CALCULAR class="btn btn-success">
        </form>
        <?php 
        if(isset($_POST['ok'])){
            include 'calificacion.php';
            echo "<hr>Tu promedio sera: ".LogicaComputacional::Promedio($_POST['parcial1'],$_POST['parcial2'],$_POST['parcial3'],$_POST['examen'],$_POST['trabajo']);
        }
        ?>
    </div>
</body>
</html>
<script src="home_files/jquery-3.js" type="text/javascript"></script>
<script src="home_files/bootstrap.js" type="text/javascript"></script>