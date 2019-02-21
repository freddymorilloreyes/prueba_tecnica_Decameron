<?php
/**
 * Created by PhpStorm.
 * User: manuel
 * Date: 21/02/2019
 * Time: 12:30 PM
 */
class Conexion
{
    private $host;
    private $db;
    private $user;
    private $conexion;
    function __construct()
    {
        $this->host="localhost";
        $this->db="prueba_tecnica_decameron";
        $this->user="root";
        $this->pass="";
        $this->conexion=$this->setConexion();
    }
    private function setConexion()
    {
        $gbd = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        return $gbd;
    }
    public function getConexion()
    {
        return $this->conexion;
    }
}

