<?php
include("conexion.php");

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (
        strlen($_POST['nombre']) >= 1 && 
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['personas']) >= 1 &&
        strlen($_POST['fecha']) >= 1 &&
        strlen($_POST['hora']) >= 1

    ) {
        $name = trim($_POST['nombre']);
        $tel = trim($_POST['telefono']);
        $per = trim($_POST['personas']);
        $fecha = trim($_POST['fecha']);
        $hora = trim($_POST['hora']);

        $consulta = "INSERT INTO reservaciones (nombre, telefono, personas, fecha, hora)
                     VALUES ('$name', '$tel', '$per', '$fecha', '$hora')";
                     
        $resultado = mysqli_query($conexion, $consulta);
        
        if ($resultado) {
          
header("Location: index.html");
        } else {
            ?>
            <h1 class="bad">¡Ups, ha ocurrido un error!</h1>
            <?php
        }
    } else {
        ?>
        <h1 class="bad">¡Por favor complete todos los campos!</h1>
        <?php
    }
}
?>
