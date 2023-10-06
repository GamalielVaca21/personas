<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Personas</title>
</head>

<body>
    <center>
        <tr>Personajes históricos</tr>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Nacimiento</th>
                    <th>Fallecimiento</th>
                    <th>Ocupación</th>
                    <th>Religion</th>
                    <th>Período histórico</th>
                    <th>Imagen</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include ("open.php");//base de datos
                    $consulta = "SELECT * FROM usuarios"; //tabla
                    $resultado = $conexion->query($consulta);
                    while($row = $resultado->fetch_assoc()){
                ?>
                        <tr>
                            <td>   <?php echo $row['id'];   ?>   </td>
                            <td>   <?php echo $row['nom'];   ?>   </td>
                            <td>   <?php echo $row['nac'];   ?>   </td>
                            <td>   <?php echo $row['fal'];   ?>   </td>
                            <td>   <?php echo $row['ocu'];   ?>   </td>
                            <td>   <?php echo $row['rel'];   ?>   </td>
                            <td>   <?php echo $row['per'];   ?>   </td>

                            <td>   <img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($row['img']);  ?>"></td>                            
                        </tr>
                    <?php
                    }
                    ?>
            </tbody>
        </table>
    </center>
</body>
</html>