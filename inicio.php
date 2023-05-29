<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="CSS/inicio-style.css">
</head>
<body>
    <section>
        <div class="container">
        <!-- Form -->
            <form class="form" action="usuario.php" method="post">
                
                <h2>Inicio de Sesión WebRequiem</h2>
                <div class="form-box">
                    <div class="input-box w50">
                        <input type="text" id="matricula" name="matricula" required>
                        <span>Matricula</span>
                    </div>

                   

                    <div class="input-box w50">
                        <input type="password" id="contraseña" name="contraseña" required>
                        <span>Contraseña</span>
                    </div>

                    <div>
                        <label for="cliente">Usuario</label>
                        <input id="cliente" type="radio" name="tipo" value="cliente">
                    </div>
    
                    <div>
                        <label for="proveedor">Administrador</label>
                        <input id="proveedor" type="radio" name="tipo" value="proveedor">
                    </div>


                    <h3>¿No tiene cuenta?</h3>
                    <a href="registro.php"><button>Regístrate</button></a>

                    <div class="input-box w99 btn">
                        <input type="submit" value="Enviar">
                    </div>

                </form> 
        </div>
    </section>
</body>
</html>