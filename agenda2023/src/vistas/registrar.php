
<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!--Estilos personalizados-->

    <link href="../controlador/css/estilos.css" rel="stylesheet">
    <style>
        h2, h3 {
            margin: 0 auto;
            text-align: center;
            width: 400px;
        }
    </style>
    <!--<link rel="stylesheet" href="..//css/estilos.css">-->
</head>

<body>

    <h2>Registrate</h2>
    <h3><span>o 
        <a href="index.php">Inicia sesión</a>
        </span><br><br><br>
    </h3>

    <div class="izquierdo2">
        <form action="../controlador/valida_registro.php" method="POST">
            <input name="usuario_txt" type="text" placeholder="Ingresa tu correo"><br><br>
            <input name="pass_txt" type="password" placeholder="Ingresa tu contraseña"><br><br>
            <input name="confirm_password" type="password" placeholder="Confirma tu contraseña"><br><br>
            <input type="submit" value="Registrar">
        </form>
    </div>

</body>

</html>

