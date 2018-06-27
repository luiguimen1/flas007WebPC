<?php
header('Access-Control-Allow-Origin: *');
require '../../BD/datos.php';
require '../../BD/MySQLi.php';
$json = file_get_contents("php://input");
$bd = new ConectarBD();
$conn = $bd->getMysqli();

$sql = "select * from categoria order by nombre;";
$stmp= $conn->prepare($sql);
$stmp->execute();

$stmp->bind_result($id,$nombre,$descripcion,$foto);

$res=array();
while($stmp->fetch()){
    $piso = array();
    $piso["id"] = $id;
    $piso["nombre"] = $nombre;
    $piso["descripcion"] = $descripcion;
    $piso["foto"] = $foto;
    $res[]=$piso;
}

$stmp->close();
$conn->close();
echo json_encode($res);








