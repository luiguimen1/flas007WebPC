<?php
header('Access-Control-Allow-Origin: *');
require '../../BD/datos.php';
require '../../BD/MySQLi.php';
$json = file_get_contents("php://input");
$json = json_decode($json);
$bd = new ConectarBD();
$conn = $bd->getMysqli();

$sql = "select * from producto where fkCat = ? order by nombre;";
$stmp= $conn->prepare($sql);
$stmp->bind_param("i",$json->id);
$stmp->execute();
$stmp->bind_result($id,$nombre,$descripcion,$valor,$cant,$fkCat,$foto);
$res=array();
while($stmp->fetch()){
    $piso = array();
    $piso["id"] = $id;
    $piso["nombre"] = $nombre;
    $piso["descripcion"] = $descripcion;
    $piso["foto"] = $foto;
    $piso["valor"] = $valor;
    $piso["cant"] = $cant;
    $res[]=$piso;
}
$stmp->close();
$conn->close();
echo json_encode($res);
