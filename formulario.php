<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduccion PHP</title>
    <link rel="stylesheet" href="cssPropio/normalizacion.css">
    <link rel="stylesheet" href="cssPropio/estiloIndex.css">
    <link rel="stylesheet" href="cssPropio/estiloFormulario.css">

    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <nav>
        <a href="index.html">Inicio</a> <!--inicio de la pagina-->
        <a href="formulario.php">Formulario</a> <!--formulario de la pagina-->
        <a href="">Datos</a>   <!--Se muestran los datos cargados en la pagina-->
        <a href="">Procesos</a> <!--Pensando-->
    </nav>

    <section class="miFormulario">
        Mi Formulario
        <hr>
        <form class="formu" id="formu" name="formu" action="" method="POST">

            <!-- GRUPO USUARIO -->
            <div class="formu__grupo" id="grupo__usuario">
                <label for="usuario" class="formu__label"> Usuario</label>

                <div class="formu__grupo-input">
                    <input class="formu__input" type="text" id="usuario" name="usuario" placeholder="Ingresa tu usuario">
                    <i class="formu__validacion-estado fa fa-thumbs-up"></i>
                    <i class="formu__validacion-estado fa fa-thumbs-down"></i>
                </div>

                <p class="formu__input-error">El usuario tiene que ser de 4 a 16 digitos y solo puede contener numeros, letras y guion bajo.</p>
            </div>

            <!-- GRUPO NOMBRE -->
            <div class="formu__grupo" id="grupo__nombre">

                <label for="nombre" class="formu__label"> Nombre</label>

                <div class="formu__grupo-input">
                    <input class="formu__input" type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre">
                    <i class="formu__validacion-estado fa fa-thumbs-up"></i>
                    <i class="formu__validacion-estado fa fa-thumbs-down"></i>
                </div>

                <p class="formu__input-error">El nombre tiene que ser de 4 a 16 digitos y solo debe contener letras.</p>
            </div>

            <!-- GRUPO APELLIDO -->
            <div class="formu__grupo" id="grupo__apellido">

                <label for="apellido" class="formu__label"> Apellido</label>

                <div class="formu__grupo-input">
                    <input class="formu__input" type="text" id="apellido" name="apellido" placeholder="Ingresa tu apellido">
                    <i class="formu__validacion-estado fa-regular fa-thumbs-up"></i>
                    <i class="formu__validacion-estado fa-regular fa-thumbs-down"></i>
                </div>

                <p class="formu__input-error">El apellido tiene que ser de 4 a 16 digitos y solo debe contener letras.</p>
            </div>

            <!-- GRUPO CORREO -->
            <div class="formu__grupo" id="grupo__correo">

                <label for="correo" class="formu__label"> Correo</label>

                <div class="formu__grupo-input">
                    <input class="formu__input" type="email" id="correo" name="correo" placeholder="Ingresa tu correo">
                    <i class="formu__validacion-estado fa-regular fa-thumbs-up"></i>
                    <i class="formu__validacion-estado fa-regular fa-thumbs-down"></i>
                </div>

                <p class="formu__input-error">El correo solo puede contener letras, numeros, guiones, guion bajo y puntos.</p>
            </div>

            <!-- GRUPO MENSAJE ERROR -->
            <div class="formu__mensaje-error" id="formu_mensaje-error">
                <p><i class="fas fa-exclamation-triangle"></i> <b>ERROR:</b> Complete todos los campos correctamente.</p>
            </div>

            <!-- GRUPO BOTON -->
            <div class="formu__grupo formu__grupo-btn-enviar">
                <button class="formu__btn" type="submit"> Enviar</button>
                <p class="formu__mensaje-exito">Formulario enviado exitosamente!</p>
            </div>
        </form>
    </section>
    
</body>
</html>