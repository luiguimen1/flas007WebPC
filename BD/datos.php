<?php
class Datos {
  //  private $hostname = 'localhost';
  //  private $usuario = 'root';
  //  private $clave = '';
  //  private $db = 'flas07';
    private $hostname = 'localhost';
    private $usuario = 'mirayapr_UserJca';
    private $clave = '-H60(f8R(2aa';
    private $db = 'mirayapr_Jcali';
    
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
