<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <script src="../js/persona.js"></script>
    <?php require_once('libreria.php'); ?>
</head>

<body>
    <!-- se esta agregando toda la estructura html con lo siguiente require_once -->
    <?php require_once('navbar.php'); ?>
    <div class="container">
        <div id="mensaje" class="alert alert-success 
    alert-dismissible fade show" role="alert" style="display:none">
            <!-- cuerpo del mensaje -->
            <div id="cuerpoMensaje">
                Se guardó correctamente
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <h1 id="hy">registar persona </h1>
        <div class="row">
            <div class="col col-xl-6 col-12">
                <label for="">Nombre</label>
                <input type="text" class="form-control" onfocusout="validarPrimerNombre();" required id="primer_Nombre"
                    name="Nombre" minlength="1" maxlength="30">
            </div>
            <div class="col col-xl-6 col-12">
                
                <label for="">Apellido</label>
                <input type="text" class="form-control" onfocusout="validarPrimer_apelli();" id="primer_Apellido"
                    required name="Apellido" minlength="1" maxlength="30">
            </div>
            <div class="col col-xl-6 col-12">
                <label for="">Correo electronico</label>
                <input type="text" class="form-control" required id="correo_electronico" name="correo_electronico"
                    minlength="4" maxlength="255">
            </div>
            <div class="col col-xl-6 col-12">
                <label for="">Telefono</label>
                <input type="number" step="1" class="form-control" onfocusout="validarTelefono();" id="telefono"
                    required name="telefono" min="3000000000" max="3559999999">
                </div>
                <label for="">pregunta 1</label>
                <div class="col col-xl-6 col-12">
                <select id="pregunta1" required class="form-control">
                    <option value="" disabled selected>Seleccione una opcion</option>
                    <option value="1">¿Cuál fue el nombre de tu primer maestro/a en la escuela primaria?</option>
                    <option value="2">¿Cuál es el nombre de tu mejor amigo/a de la infancia?</option>
                    <option value="3">¿Cuál fue el modelo de tu primer automóvil?</option>
                    <option value="4">¿Cuál es el nombre de tu abuelo/a materno/a?</option>
                    <option value="5">¿Cuál es el título de tu libro favorito?</option>
                    <option value="6">¿Cuál es el nombre de la calle donde viviste durante tu infancia?</option>
                    <option value="7">¿Cuál es el nombre de tu personaje ficticio favorito?</option>
                    <option value="8">¿Cuál fue el año en que te graduaste de la escuela secundaria?</option>
                    <option value="9">¿Cuál es tu color favorito?</option>
                    <option value="10">¿Cuál es el nombre de la empresa donde trabajaste por última vez?</option>
                </select>
            </div>
            <div class="col col-xl-6 col-12">
                <label for="">respuesta 1</label>
                <input type="text" step="1" class="form-control" onfocusout="validarrespuesta1();" id="respuesta1"
                    required name="respuesta1" min="3000" max="3000">
            </div>
            <div class="col col-xl-6 col-12">
                <label for="">pregunta 2</label>
                <select id="pregunta2" required class="form-control">
                    <option value="" disabled selected>Seleccione una opcion</option>
                    <option value="1">¿Cuál fue el nombre de tu primer maestro/a en la escuela primaria?</option>
                    <option value="2">¿Cuál es el nombre de tu mejor amigo/a de la infancia?</option>
                    <option value="3">¿Cuál fue el modelo de tu primer automóvil?</option>
                    <option value="4">¿Cuál es el nombre de tu abuelo/a materno/a?</option>
                    <option value="5">¿Cuál es el título de tu libro favorito?</option>
                    <option value="6">¿Cuál es el nombre de la calle donde viviste durante tu infancia?</option>
                    <option value="7">¿Cuál es el nombre de tu personaje ficticio favorito?</option>
                    <option value="8">¿Cuál fue el año en que te graduaste de la escuela secundaria?</option>
                    <option value="9">¿Cuál es tu color favorito?</option>
                    <option value="10">¿Cuál es el nombre de la empresa donde trabajaste por última vez?</option>
                </select>
            </div>
            <div class="col col-xl-6 col-12">
                <label for="">respuesta 2</label>
                <input type="text" step="1" class="form-control" onfocusout="validarrespuesta2();" id="respuesta2"
                    required name="respuesta2" min="3000000000" max="3559999999">
            </div>
            <div class="col col-xl-6 col-12">
                <label for="">pregunta 3</label>
                <select id="pregunta3" required class="form-control">
                    <option value="" disabled selected>Seleccione una opcion</option>
                    <option value="1">¿Cuál fue el nombre de tu primer maestro/a en la escuela primaria?</option>
                    <option value="2">¿Cuál es el nombre de tu mejor amigo/a de la infancia?</option>
                    <option value="3">¿Cuál fue el modelo de tu primer automóvil?</option>
                    <option value="4">¿Cuál es el nombre de tu abuelo/a materno/a?</option>
                    <option value="5">¿Cuál es el título de tu libro favorito?</option>
                    <option value="6">¿Cuál es el nombre de la calle donde viviste durante tu infancia?</option>
                    <option value="7">¿Cuál es el nombre de tu personaje ficticio favorito?</option>
                    <option value="8">¿Cuál fue el año en que te graduaste de la escuela secundaria?</option>
                    <option value="9">¿Cuál es tu color favorito?</option>
                    <option value="10">¿Cuál es el nombre de la empresa donde trabajaste por última vez?</option>
                </select>
            </div>
            <div class="col col-xl-6 col-12">
                <label for="">respuesta 3</label>
                <input type="text" step="1" class="form-control" onfocusout="validarrespuesta3();" id="respuesta3"
                    required name="respuesta3" min="3000000000" max="3559999999">
            </div>
            <div class="col col-xl-6 col-12">
                <label for="">contraseña</label>
                <input type="text" step="1" class="form-control" onfocusout="validarcantraseña();" id="contraseña"
                    required name="contraseña" min="3000000000" max="3559999999">
            </div>
        </div>
        <button class="button " ><span class="text">registro</span></button>
        <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
        <p>¿Ya tienes una cuenta?<a class="link" href="sesion.php">Iniciar Sesion</a></p>
    </div>
    </div>
    </div>
</body>

</html>
 