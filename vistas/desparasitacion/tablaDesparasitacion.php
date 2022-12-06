<?php
    $sql = "SELECT * FROM v_desparasitacion";
    $respuesta = mysqli_query($conexion, $sql);
?>

<table class="table table-hover table-sm">
    <thead>
        <tr>
            <th>NOMBRE DEL DUEÑO</th>
            <th>NOMBRE DE LA MASCOTA</th>
            <th>FECHA</th>
            <th>TIPO</th>
            <th>EDITAR</th>
            <th>ELIMINAR</th>
        </tr>
    </thead>

    <tbody>
        <?php while ($ver = mysqli_fetch_array($respuesta)) { ?>

        <tr>
            <td><?php echo $ver['nombrePersona'];?></td>
            <td><?php echo $ver['nombreMascota'];?></td>
            <td><?php echo $ver['fecha'];?></td>
            <td><?php echo $ver['tipo'];?></td>
            <td><a href="#" class="btn btn-outline-warning"><i class="fa-regular fa-pen-to-square"></i> Editar</a></td>
            <td><a href="#" class="btn btn-outline-danger"><i class="fa-solid fa-ban"></i> Eliminar</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>