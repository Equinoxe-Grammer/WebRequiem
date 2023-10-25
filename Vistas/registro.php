<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse en WebRequiem</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="../CSS/registro-style.css">
    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 384 512'%3E%3Cpath d='M32 32c17.7 0 32 14.3 32 32V288c0 70.7 57.3 128 128 128s128-57.3 128-128V64c0-17.7 14.3-32 32-32s32 14.3 32 32V288c0 106-86 192-192 192S0 394 0 288V64C0 46.3 14.3 32 32 32z'/%3E%3C/svg%3E" type="image/svg+xml">
    
</head>
<body>
    <section>
        <div class="container">
            <!-- Formulario de Registro -->
            <form class="form" action="../Acciones/Registrarusr.php" method="post">
                <h2>Registrarse en WebRequiem</h2>
                <div class="form-box">
                    <div class="input-box w50">
                        <input type="text" name="Nombre" required>
                        <label for="Nombre"><i class="fas fa-user"></i> Nombre completo</label>
                    </div>

                    <div class="input-box w50">
                        <input type="text" name="Matricula" required>
                        <label for="Matricula"><i class="fas fa-id-card"></i> Matrícula</label>
                    </div>

                    <div class="input-box w50">
                        <input type="email" name="Correo" required>
                        <label for="Correo"><i class="fas fa-envelope"></i> Correo electrónico</label>
                    </div>

                    <div class="input-box w50">
                        <input type="password" name="password" required>
                        <label for="password"><i class="fas fa-lock"></i> Contraseña</label>
                    </div>

                    <div class="input-box w50">
                        <input type="password" name="password2" required>
                        <label for="password2"><i class="fas fa-lock"></i> Confirmar contraseña</label>
                    </div>

                    <div class="input-box w50">
                        <h3><i class="fas fa-graduation-cap"></i> Facultad</h3>
                        <?php
                        include '../Acciones/Facultades.php';
                        ?>
                    </div>

                    <div class="input-box w50">
    <h3><i class="fas fa-users"></i> Tipo de Usuario</h3>
    <div class="user-type-container">
        <div>
            <input id="cliente" type="radio" name="tipo" value="cliente" required>
            <label for="cliente">Cliente</label>
        </div>
        <div>
            <input id="proveedor" type="radio" name="tipo" value="proveedor">
            <label for="proveedor">Proveedor</label>
        </div>
    </div>
</div>

                    <div class="input-box w100 btn">
                        <input type="submit" value="Enviar">
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
