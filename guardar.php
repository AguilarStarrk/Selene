<?php
include("conexion.php");

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['password']) >= 1) {
        $name = trim($_POST['nombre']);
        $email = trim($_POST['correo']);
        $password = trim($_POST['password']);

        // Verificar si el nombre de usuario ya existe en la base de datos
        $consulta_usuario = "SELECT nombre FROM invitados WHERE nombre = '$name'";
        $resultado_usuario = mysqli_query($conexion, $consulta_usuario);

        // Verificar si el correo electrónico ya existe en la base de datos
        $consulta_correo = "SELECT correo FROM invitados WHERE correo = '$email'";
        $resultado_correo = mysqli_query($conexion, $consulta_correo);

        if (mysqli_num_rows($resultado_usuario) > 0) {
            ?>
            <script>alert("El nombre de usuario ya está en uso."); window.location.href = "registrar.php"; </script>
            <?php
        } elseif (mysqli_num_rows($resultado_correo) > 0) {
            ?>
            <script>alert("El correo electrónico ya está en uso."); window.location.href = "registrar.php"; </script>
            <?php
        } else {
            $fechareg = date("d/m/y");
            $consulta = "INSERT INTO invitados (nombre, password, correo, fecha_reg) VALUES ('$name', '$password', '$email', '$fechareg')";
            $resultado = mysqli_query($conexion, $consulta);

            if ($resultado) {
                header("Location: Login.php");
            } else {
                ?>
                <h1 class="bad">¡Ups, ha ocurrido un error!</h1>
                <?php
            }
        }
    } else {
        ?>
        <script>alert("Rellene los campos."); window.location.href = "registrar.php"; </script>
        <?php
    }
}
?>
