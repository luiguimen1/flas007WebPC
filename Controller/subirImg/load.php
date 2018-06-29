<?php

require '../../BD/datos.php';
require '../../BD/MySQLi.php';
header('Access-Control-Allow-Origin: *');

$elemento = json_decode(json_encode($_POST));
$elemento->nombre = time() . ".jpg";
$elemento->success = "OK";

$res = array();
$res["success"] = "ok";
switch ($elemento->type) {
    case 1:
        $ruta = "../../imgCat/";
        $tabla = "categoria";
        break;
    case 2:
        $ruta = "../../imgPro/";
        $tabla = "producto";
        break;
    default :
        $res["success"] = "no";
        break;
}

if ($res["success"] != "no") {
    $BD = new ConectarBD();

    $conn = $BD->getMysqli();

    $sql = "update $tabla set foto = ? where id = ?;";
    $smtp = $conn->prepare($sql);

    $smtp->bind_param("si", $elemento->nombre, $elemento->id);

    if ($smtp->execute()) {
        move_uploaded_file($_FILES["ionicfile"]["tmp_name"], $ruta . $elemento->nombre);
        
     //   $tmp = explode("/",$elemento->old);
     //   $elemento->old = $tmp[sizeof($tmp)-1];
     //   unlink($ruta . $elemento->old);
    } else {
        $res["success"] = "no";
    }
}

echo json_encode($res);
