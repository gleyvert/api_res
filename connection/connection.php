<?php
class Connection extends Mysqli {
    private $hostname ='localhost';
    private $username ='root';
    private $password = '';
    private $database = 'api_rest';
    function __construct()
    {
        parent::__construct($this->hostname,$this->username,$this->password,$this->database);
        $this->set_charset('utf8');
        $this->connect_error == NULL ? 'Conexion Exitosa a la BD' : die('Error al conectarse a la BD');
    }
}

?>