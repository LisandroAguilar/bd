<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Agenda Unach 2023</title>
    <style>
        form,
        h1 {
            margin: 0 auto;
            text-align: center;
            width: 400px;
        }
    </style>
</head>

<body>
    <br><br>
    <h1>Agenda Universitaria 2023</h1><br><br>
    <form name="formulario_fmt" action="./src/vistas/menu.php" method="POST" enctype="application/x-www-form-urlencoded">
        <h3>Inicio de Sesión</h3>
        <?php
        error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
        if ($_GET["error"] == "si") {
            echo '<script>
                    Swal.fire({
                    icon: "error",title:"Usuario incorrecto",
                    text: "Registro incorrecto",showConfirmButton: true,confirmButtonText: "Aceptar"
                    });
                </script>';
        } else {
            echo "Introduce tus datos";
        }
        ?>
        <br><br>
        Usuario:
        <input type="text" name="usuario_txt"><br><br>
        Contraseña:
        <input type="password" name="pass_txt"><br><br>
        ¿No tienes Cuenta?
        <a href="./src/vistas/registrar.php">
            -Registrate- <br><br>
        </a>
        <input type="submit" value="Ingresar">
    </form>
</body>

</html>