<h2>Registro de usuarios</h2>

<form method="post" action="usuario.php?action=registrar">
    Nombre: <input type="text" name="nombre"><br>
   Edad: <input type="number" name="edad"><br>
    Ciudad: <input type="text" name="ciudad"><br>
   <input type="submit">
   
</form>

<table border="1">
    
    <tr>
        <td>nombre</td>
        <td>edad</td>   
        <td>Ciudad</td>
    </tr>
    
    <?php while ($data = mysql_fetch_assoc($usuarios)) { ?>
    <tr>
        <td><?php echo $data['nombre'] ?></td>
        <td><?php echo $data['edad'] ?></td>  
        <td><?php echo $data['ciudad'] ?></td>  
        <td><a href="">Editar</a></td>  
        <td><a href="usuario.php?action=delete&nombre=<?php echo $data['nombre'] ?>">Eliminar</a></td>  
    </tr>
    <?php } ?>
</table>