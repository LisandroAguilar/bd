<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Estilos personalizados-->

    <link href="../controlador/css/estilos.css" rel="stylesheet">

    <!--BootStrap 5-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Menú Principal</title>
    <style>
        h2 {
            margin: 0 auto;
            text-align: center;
            width: 400px;
        }
    </style>
</head>

<body>
    <h2>Menu Principal</h2>
    <br><br>
    <?php
    require("../../src/modelo/conexion.php");
    $cveusuario = $_POST["usuario_txt"];
    $pass1 = $_POST["pass_txt"];

    $sql = "SELECT * FROM usuario WHERE usuario='$cveusuario' and pass='$pass1'";
    $query = $conn->prepare($sql);
    $query->execute();

    if ($results = $query->fetchAll(PDO::FETCH_OBJ)) {
        echo '<script>
                Swal.fire({
                icon: "success",
                title:"Usuario aceptado",
                text: "Registro correcto",
                showConfirmButton: true,
                confirmButtonText: "Aceptar"
            }) </script>';

        //INICIO DE SESION
        session_start();

        //DECLARO VARIABLES DE SESION
        $_SESSION["autentificado"] = true;
        $_SESSION["usuario"] = $_POST["usuario_txt"];

        //CERRAR BASE DE DATOS
        $sql = null;
        $conn = null;
    } else {
        //CERRAR BASE DE DATOS
        $sql = null;
        $conn = null;

        header("Location: ../../index.php?error=si");
    }
    ?>
    <div class="izquierdo">
        Bienvenido:
        <?php echo $_SESSION["usuario"]; ?>
        <br><br><br>
    </div>

    <div class="izquierdo2">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Movimientos</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Altas</a></li>
                    <li><a class="dropdown-item" href="#">Bajas</a></li>
                    <li><a class="dropdown-item" href="#">Modificaciones</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Reportes</a></li>
                </ul>
            </li>
            <li>
                <a class="dropdown-item" href="../../index.php">Cerrar Sesión</a>
            </li>
        </ul>
    </div>

    <!--BootStrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>