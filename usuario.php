<?php

require './modelos/connection.php';

$action = $_GET['action'];

if ($action == 'registrar') {
    $data = count($_POST) > 0;
    if ($data) { //si es post guarda los datos
        
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        
        mysql_query("insert into usuario values('$nombre', '$edad')");
        header("location:usuario.php?action=registrar");
    } else {
        $usuarios = mysql_query("select * from usuario");
        require './vistas/usuario/registrar.php';
    }
} else if ($action == 'editar') {
    require './vistas/usuario/editar.php';
}
  
  