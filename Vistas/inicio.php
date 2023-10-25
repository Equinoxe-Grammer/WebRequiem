<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio De Sesión</title>
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../CSS/inicio-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 384 512'%3E%3Cpath d='M32 32c17.7 0 32 14.3 32 32V288c0 70.7 57.3 128 128 128s128-57.3 128-128V64c0-17.7 14.3-32 32-32s32 14.3 32 32V288c0 106-86 192-192 192S0 394 0 288V64C0 46.3 14.3 32 32 32z'/%3E%3C/svg%3E" type="image/svg+xml">
    


</head>

<body>
    <?php
    if (isset($_GET['registro']) && $_GET['registro'] === 'exitoso') {
        echo "Registro exitoso. ¡Bienvenido!";
    }
    ?>

    <section>
        <div class="container">
            <!-- Formulario de inicio de sesión -->
            <form class="form" action="../Acciones/usuario.php" method="post" autocomplete="off">
                <h2>Inicio de Sesión WebRequiem</h2>
                <div class="form-box">
                    <div class="input-box w50">
                        <i class="fas fa-user"></i> <!-- Icono de usuario -->
                        <input type="text" id="matricula" name="matricula" autocomplete="off" required placeholder="Matrícula">
                    </div>
                    <div class="input-box w50">
                        <i class="fas fa-lock"></i> <!-- Icono de candado -->
                        <input type="password" id="contraseña" name="contraseña" autocomplete="off" required placeholder="Contraseña">
                    </div>
                    <div class="input-box w99 btn">
                        <input type="submit" value="Iniciar Sesión">
                    </div>
                </div>
                <div class="input-box w99 btn">
                    <a href="../Vistas/registro.php">
                        <button class="registro">Regístrate</button>
                    </a>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
