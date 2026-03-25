<?php
include("conexion.php");
$con = conexion();

$sql = "SELECT * FROM persona";
$result = pg_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Personas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Lista de Personas</h2>

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Dirección</th>
                <th>Celular</th>
            </tr>
        </thead>
        <tbody>

        <?php while($row = pg_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row["idpersona"]; ?></td>
                <td><?php echo $row["documento"]; ?></td>
                <td><?php echo $row["nombre"]; ?></td>
                <td><?php echo $row["apellido"]; ?></td>
                <td><?php echo $row["direccion"]; ?></td>
                <td><?php echo $row["celular"]; ?></td>
            </tr>
        <?php } ?>

        </tbody>
    </table>

    <a href="index.php" class="btn btn-primary">Volver</a>
</div>

</body>
</html>