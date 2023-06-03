
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="CSS/registro-style.css">
</head>

<body>
    <section>
        <div class="container">
            <!-- Form -->
            <form class="form" action="Registrarusr.php" method="post">
                <h2>Registrarse WebRequiem</h2>
                <div class="form-box">
                    <div class="input-box w50">
                        <input type="text" name="Nombre" required>
                        <span>Nombre completo</span>
                    </div>

                    <div class="input-box w50">
                        <input type="text" name="Matricula" required>
                        <span>Matricula</span>
                    </div>

                    <div class="input-box w50">
                        <input type="text" name="Correo" required>
                        <span>Correo</span>
                    </div>

                    <div class="input-box w50">
                        <input type="password" name="password" required>
                        <span>Contraseña</span>
                    </div>

                    <div class="input-box w50">
                        <input type="password" name="password2" required>
                        <span>Confirmar contraseña</span>
                    </div>

                    <div class="input-box w50" action="Facultades.php" method="POST">
                        <h3>Facultad</h3>
                        <?php
                     include'Facultades.php'
                        ?>
                    </div>

                    <div>
                        <label for="cliente">Usuario</label>
                        <input id="cliente" type="radio" name="tipo" value="cliente">
                    </div>

                    <div>
                        <label for="proveedor">Administrador</label>
                        <input id="proveedor" type="radio" name="tipo" value="proveedor">
                    </div>

                    <div class="input-box w100 btn">
                        <input type="submit" value="Enviar">
                    </div>
                </div>
        </div>
        </div>
        </form>
    </section>
   
</body>

</html>