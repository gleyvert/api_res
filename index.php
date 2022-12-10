<?php
require_once "models/cliente.php";

switch ($_SERVER['REQUEST_METHOD'] ) {
    case 'GET':
        echo json_encode(Cliente::getAll());
        break;
    
    default:
        # code...
        break;
}

?>