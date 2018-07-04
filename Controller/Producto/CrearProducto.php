<?php
header('Access-Control-Allow-Origin: *');
require '../../BD/datos.php';
require '../../BD/MySQLi.php';
$json = file_get_contents("php://input");
$json = json_decode($json);
$bd = new ConectarBD();
$conn = $bd->getMysqli();


$sql = "insert into fl07_producto(nombre,descripcion,valor,cant,fkCat) values(?,?,?,?,?);";

$stmp = $conn->prepare($sql);
$stmp->bind_param("ssdii",$json->nombre,$json->descripcion,$json->valor,$json->cant,$json->fkCat);
$res = array();
$res["success"] = "no";
if($stmp->execute() == 1){
    $res["success"] = "OK";
}
$stmp->close();
$conn->close();
echo json_encode($res);