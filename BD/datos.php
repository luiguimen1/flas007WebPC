<?php
class Datos {
    private $hostname = 'localhost';
    private $usuario = 'root';
    private $clave = '';
    private $db = 'flas07';
    
    public function Datos() {
        
    }
    public function get_hostname() {
        return $this->hostname;
    }
    public function get_usuario() {
        return $this->usuario;
    }
    public function get_clave() {
        return $this->clave;
    }
    public function get_DB() {
        return $this->db;
    }
}
