<h2>Registro de usuarios</h2>

<form method="post" action="usuario.php?action=registrar">
    Nombre: <input type="text" name="nombre"><br>
   Edad: <input type="number" name="edad"><br>
   <input type="submit">
   
</form>

<table border="1">
    
    <tr>
        <td>nombre</td>
        <td>edad</td>   
    </tr>
    
    <?php while ($data = mysql_fetch_assoc($usuarios)) { ?>
    <tr>
        <td><?php echo $data['nombre'] ?></td>
        <td><?php echo $data['edad'] ?></td>  
    </tr>
    <?php } ?>
</table>