<?php 

$dsn = 'mysql:host=localhost; dbname=paginaweb_comida';
$username = 'root';
$password='';
$options = [];

try{
  $connection = new PDO($dsn, $username, $password, $options);
} catch(PDOExeption $e){
  echo "Fallo la conneción a la base de datos";
  die();
}

$sql = 'Select * from supply_super';
$statement = $connection->prepare($sql);
$statement->execute();
$base_de_empresas= $statement->fetchAll(PDO::FETCH_OBJ);


$sql2 = 'Select * from destino_ong';
$statement = $connection->prepare($sql2);
$statement->execute();
$base_de_ong= $statement->fetchAll(PDO::FETCH_OBJ);


