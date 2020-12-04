<?php

require 'db.php';
$message='';


if(isset($_POST['nombre_empresa']) && isset($_POST['direccion_empresa']) && isset($_POST['comuna_empresa']) && isset($_POST['prod_a_donar'])){
    $super_nombre = $_POST['nombre_empresa'];
    $super_comuna = $_POST['comuna_empresa'];
    $super_direccion = $_POST['direccion_empresa'];
    $super_tipoprod = $_POST['prod_a_donar'];
    $sql = "INSERT INTO supply_super values(NULL,'".$super_nombre."','".$super_comuna."','".$super_direccion."','".$super_tipoprod."')";
    $statement = $connection->prepare($sql);
    if ($statement->execute()){
        echo('Data agregada correctamente');
    }
    else{
        echo('Error en agregar los datos');
    }
}
require 'header.php';
?>

<div class="container-fluid">
    <div class="card mt-4">
        <div class="card-header">
            <h2>Agregar Empresa</h2>
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label for="name">Nombre de la empresa</label>
                    <input type="text" class="form-control" id="nombre_empresa" name="nombre_empresa" placeholder="Ingrese el nombre" require>
                </div>
                <div class="form-group">
                    <label for="comuna">Comuna</label>
                    <select class="form-control" name="comuna_empresa" id="comuna_empresa">
                        <option value="Lo Barnechea">Lo Barnechea</option>
                        <option value="La Florida">La Florida</option>
                        <option value="La Reina">La Reina</option>
                        <option value="Santiago">Santiago</option>
                        <option value="Peñalolen">Peñalolen</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="direccion_empresa">Dirección</label>
                    <input type="text" class="form-control" id="direccion_empresa" name="direccion_empresa" placeholder="Ingrese la dirección de la sucursal" require>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Tipo de producto a donar</label>
                    <select class="form-control" name="prod_a_donar" id="prod_a_donar">
                        <option value ="Alimentos perecibles">Alimentos perecibles</option>
                        <option value = "Higiene/Necesidades básicas">Higiene/Necesidades básicas</option>
                        <option value ="Alimentos no perecibles">Alimentos no perecibles</option>
                        <option value="Agua">Agua</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-warning">Agregar elemento</button>
            </form>
        </div>

    </div>
</div>

<?php require'footer.php' ?>