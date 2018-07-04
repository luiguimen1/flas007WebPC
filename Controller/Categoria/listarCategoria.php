<?php
header('Access-Control-Allow-Origin: *');
require '../../BD/datos.php';
require '../../BD/MySQLi.php';
$json = file_get_contents("php://input");
$json = json_decode($json);
$bd = new ConectarBD();
$conn = $bd->getMysqli();
if ($json->acesso == true) {
    $sql = "select id,concat(nombre,' #P ',(select count(*) from fl07_producto where fkCat =c.id )) nombre, descripcion, foto from fl07_categoria c order by nombre;";
} else {
    $sql = "select id,concat(nombre,' #P ',(select count(*) from fl07_producto where fkCat =c.id )) nombre, descripcion, foto from fl07_categoria c where (select count(*) from fl07_producto where fkCat =c.id ) >=1 order by nombre;";
}
$stmp = $conn->prepare($sql);
$stmp->execute();

$stmp->bind_result($id, $nombre, $descripcion, $foto);

$res = array();
while ($stmp->fetch()) {
    $piso = array();
    $piso["id"] = $id;
    $piso["nombre"] = $nombre;
    $piso["descripcion"] = $descripcion;
    $piso["foto"] = $foto;
    $res[] = $piso;
}

$stmp->close();
$conn->close();
echo json_encode($res);








