<?php 


require 'db.php';

$id_a_editar = $_GET['id'];

$sql = "SELECT * from supply_super where super_id=".$id_a_editar."";
$statement = $connection->prepare($sql);
$statement->execute();
$base_de_empresa= $statement->fetchAll(PDO::FETCH_OBJ); 

if(isset($_POST['nombre_empresa']) && isset($_POST['direccion_empresa']) && isset($_POST['comuna_empresa']) && isset($_POST['prod_a_donar'])){
    $super_nombres = $_POST['nombre_empresa'];
    $super_comunas = $_POST['comuna_empresa'];
    $super_direccions = $_POST['direccion_empresa'];
    $super_tipoprods = $_POST['prod_a_donar'];
    $sql = "UPDATE supply_super set super_nombre='".$super_nombres."',super_comuna='".$super_comunas."',super_direccion='".$super_direccions."',super_tipoprod='".$super_tipoprods."'
     where super_id=".$id_a_editar.";)";
    $statement = $connection->prepare($sql);
    if ($statement->execute()){
        header("Location: /crud/admin.php");
        echo('Data actualizada correctamente');
    }
    else{
        echo('Error en actualizar los datos');
    }
}


require 'header.php'; ?>

<div class="container-fluid">
    <div class="card mt-4">
        <div class="card-header">
            <h2>Editar los datos de la empresa</h2>
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label for="name">Nombre de la empresa</label>
                    <input type="text" value="<?=$base_de_empresa[0]->super_nombre;?>" class="form-control" id="nombre_empresa" name="nombre_empresa" placeholder="Ingrese el nombre" require>
                </div>
                <div class="form-group">
                    <label for="comuna">Comuna</label>
                    <select class="form-control" value="<?=$empresa->super_comuna;?>" name="comuna_empresa" id="comuna_empresa">
                        <option value="Lo Barnechea">Lo Barnechea</option>
                        <option value="La Florida">La Florida</option>
                        <option value="La Reina">La Reina</option>
                        <option value="Santiago">Santiago</option>
                        <option value="Peñalolen">Peñalolen</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="direccion_empresa">Dirección</label>
                    <input type="text" value="<?=$base_de_empresa[0]->super_direccion;?>" class="form-control" id="direccion_empresa" name="direccion_empresa" placeholder="Ingrese la dirección de la sucursal" require>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Tipo de producto a donar</label>
                    <select class="form-control" value="<?=$empresa->super_tipoprod;?>" name="prod_a_donar" id="prod_a_donar">
                        <option value ="Alimentos perecibles">Alimentos perecibles</option>
                        <option value = "Higiene/Necesidades básicas">Higiene/Necesidades básicas</option>
                        <option value ="Alimentos no perecibles">Alimentos no perecibles</option>
                        <option value="Agua">Agua</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-warning">Actualizar elementos</button>
            </form>
        </div>

    </div>
</div>
