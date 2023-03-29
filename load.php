<?php
include("head.php");
?>
<main>
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-4 col-md-3 mx-auto">
                <h1 class="fw-light">Cargar información</h1>
                <p class="lead text-muted">
                    "Ingresa el archivo con extensión .csv para comenzar a cargar 
                la información dentro de la base de datos"</p>
                    <p>
                    <div class="mb-3">
  <label for="formFile" class="form-label">Ingresar archivo</label>
  <form enctype="multipart/form-data" method="post">
  <input type="file" name="archivo" class=form-control>
</div>   
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <button type="submit" class="btn btn-outline-success" name="subir">Subir</button>
</div>
<?php
if(isset($_REQUEST['subir'])){
    $nombre=$_FILES['archivo']['name'];
    $tipo=$_FILES['archivo']['type'];
    $explode_name=explode('.',$nombre);
    if($explode_name[1]=='csv'||$explode_name[1]=='text'){
        $csv_file=true;
    }
    else{
            $csv_file=false;
            die("Archivo no válido, selecciona un csv");
    }
    $destino="csv/$nombre";
    $res=copy($_FILES['archivo']['tmp_name'],$destino);
?>
<div class="alert alert-<?php echo $res?"primary": "danger"; ?> alert-dismissible fade show" role="alert">
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
<?php echo $res?"Archivo subido exitosamente": "Error al subir el archivo"; ?>
</div>
<?php
if(file_exists($destino)==true ){
    include_once "conexion.php";
    $con=mysqli_connect($db_host,$db_user,$db_pass, $db_database);
    $archivo=fopen($destino,"r");
    $query="INSERT INTO ejemplo 
    (nombre, usuario, correo) values ";

    while( ($columna=fgetcsv($archivo))!=false ){
        $query.="( '".$columna[0]."','".$columna[1]."','".$columna[2]."'),";
    }
    $query=substr($query,0,-1);
    $resultado=mysqli_query($con,$query);
    ?>
    <div class="alert alert-<?php echo $resultado?"primary": "danger"; ?> alert-dismissible fade show" role="alert">
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
<?php echo $resultado?"Importación exitosa": "Error ".mysqli_error($con); ?>
</div>
    <?php
}
}
?>
</div>
</main>