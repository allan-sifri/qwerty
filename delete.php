

<?php 

require 'db.php';

$id_a_borrar = $_GET['id'];

$sql= "DELETE FROM supply_super where super_id=".$id_a_borrar."";
$statement = $connection->prepare($sql);
if($statement->execute()){
    header("Location: /crud/admin.php");
}

?>

