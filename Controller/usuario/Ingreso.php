<?php
header('Access-Control-Allow-Origin: *');
require '../../BD/datos.php';
require '../../BD/MySQLi.php';
$json = file_get_contents("php://input");
$json = json_decode($json);
$BD = new ConectarBD();
$conn = $BD->getMysqli();
$sql = "select * from fl07_user where cc = ? and clave like binary sha1(?) limit 1;";
$smtp = $conn->prepare($sql);
$smtp->bind_param("ss", $json->usuario, $json->clave);
$smtp->execute();
$smtp->bind_result($id, $nom, $ape, $rol, $cc, $clave, $foto);
$res = array();
$res["sucess"]="no";
while ($smtp->fetch()) {
    $piso = array();
    $piso["id"] = $id;
    $piso["nom"] = $nom;
    $piso["ape"] = $ape;
    $piso["rol"] = $rol;
    $piso["cc"] = $cc;
    //$piso["clave"] = $clave;
    $piso["foto"] = $foto;
    $res[]=$piso;
    $res["sucess"]="ok";
}
$smtp->close();
$conn->close();
echo json_encode($res);



