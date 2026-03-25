<?php
include("conexion.php");
$con = conexion();

// Consulta
$sql = "SELECT * FROM persona";
$result = pg_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listar Registros</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Lista de Personas</h2>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nro Documento</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Dirección</th>
                <th>Celular</th>
            </tr>
        </thead>
        <tbody>

        <?php while($row = pg_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["doc"]; ?></td>
                <td><?php echo $row["nom"]; ?></td>
                <td><?php echo $row["ape"]; ?></td>
                <td><?php echo $row["dir"]; ?></td>
                <td><?php echo $row["cel"]; ?></td>
            </tr>
        <?php } ?>

        </tbody>
    </table>

    <a href="index.php" class="btn btn-primary">Volver</a>
</div>

</body>
</html>