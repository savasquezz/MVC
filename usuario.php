<?php

require './modelos/connection.php';

$action = $_GET['action'];

if ($action == 'registrar') {
    $data = count($_POST) > 0;
    if ($data) { //si es post guarda los datos
        
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $ciudad = $_POST['ciudad'];
        
        mysql_query("insert into usuario values('$nombre', '$edad', '$ciudad')");
        header("location:usuario.php?action=registrar");
    } else {
        $usuarios = mysql_query("select * from usuario");
        require './vistas/usuario/registrar.php';
    }
} else if ($action == 'editar') {
    require './vistas/usuario/editar.php';

} else if ($action == 'delete') {
    $nombre = $_GET['nombre'];
    mysql_query("delete from usuario where nombre='$nombre'");
    header("location:usuario.php?action=registrar");
}
  
  