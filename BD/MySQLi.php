<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MySQLi
 *
 * @author Lic. Luis Eduardo Alvarez Meneses
 */
class ConectarBD {

    //put your code here
    private $mysqli;

    function __construct() {
        $this->conectar();
    }

    private function conectar() {
        $dato_conn = new Datos();
        $this->mysqli = new mysqli($dato_conn->get_hostname(), $dato_conn->get_usuario(), $dato_conn->get_clave(), $dato_conn->get_DB());
        if ($this->mysqli->connect_errno) {
            return "Falló la conexión a MySQL: (" . $this->mysqli->connect_errno . ") " . $this->mysqli->connect_error;
            //  exit();
        } else {
            $this->mysqli->query("SET NAMES 'utf8'");
            return "OK";
        }
    }
    
    /**
     * Metodo que retona el driver de coneccón la BD MYSQL
     * @return type retorna el conector
     */
    function getMysqli() {
        return $this->mysqli;
    }

}
