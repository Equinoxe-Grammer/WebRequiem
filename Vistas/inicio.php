<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../CSS/inicio-style.css">
</head>

<body >


    <section>
        <div class="container">
            <!-- Form -->
            <form class="form" action="../Acciones/usuario.php" method="post" autocomplete="off">
                <h2>Inicio de Sesión WebRequiem</h2>
                <div class="form-box">
                    <div class="input-box w50">
                        <input type="text" id="matricula" name="matricula" autocomplete="off" required>
                        <span>Matricula</span>
                    </div>
                    <div class="input-box w50">
                        <input type="password" id="contraseña" name="contraseña" autocomplete="off" required>
                        <span>Contraseña</span>
                    </div>
                    <h3>¿No tiene cuenta?</h3>
                    <a href="../Vistas/registro.php"><button>Regístrate</button></a>
                    <div class="input-box w99 btn">
                        <input type="submit" value="Enviar">
                    </div>
            </form>
        </div>
    </section>
    <button onclick="window.location.href='../Vistas/index.php'">PAGINA PRINIPAL</button>
</body>

</html>