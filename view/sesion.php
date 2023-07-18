<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iniciar sesión</title>
    <script src="../js/persona.js"></script>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/sesion.css">
    <?php require_once('libreria.php'); ?>
    <?php require_once('navbar.php'); ?>
</head>

<body>
    <div class="container">
    </div>
    <div class="container-padre">
        <h1>Login</h1>
        <div class="contianer-hijo">
            <label for="">Email</label>
            <input type="text" class="form-control">
            <label for="">Password</label>
            <input type="text" class="form-control">
        </div>
        <br>
        <center>
            <button class="btn btn-primary">Iniciar</button>
        </center>
    </div>

</body>

</html>