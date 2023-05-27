
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="CSS/registro-style.css">
    <title>Crear publicaciones</title>
</head>
<body>
    <!-- MENÚ DE NAVEGACIÓN -->
<nav>
    
    <div>
    <a href="index.html"></a><img src="img/logo.jpg" alt="">
    </div>

    <div class="enlaces">
        <a href="index.html">Inicio</a>
        <a href="crear.html">Crear publicación</a>
        <a href="mis-publicaciones.html">Mis publicaciones</a>
        <a href="inicio.html">Iniciar Sesión</a>
        <a class="input-container">
            <input type="text" placeholder="Buscar">
            <i class="fas fa-search"></i>
        </a>
    </div>
</nav>
<!-- CREAR PUBLICACION -->
<section>
    <div class="container">
    <!-- Form -->
        <div class="form">
            <h2 class="titulo-centrado">Crear publicación</h2>
            <div class="form-box">
                <div class="input-box w50">
                    <input type="text" required>
                    <span>Nombre (s)</span>
                </div>

                <div class="input-box w50">
                    <input type="text" required>
                    <span>Apellido (s)</span>
                </div>

                <div class="input-box w50">
                    <input type="text" required>
                    <span>Nombre del producto</span>
                </div>

                <div class="input-box w50">
                    <input type="number" required>
                    <span>Precio</span>
                </div>

                    <div class="imagen">
                        <h3>Imagen del producto</h3>
                        <img src="img/producto1.jpg" alt="">
                    </div>

                <div class="input-box w50">
                    <h3>¿En que Facultad se encuentra?</h3>
                    
                        
                    
                </div>

                <div class="input-box w100 btn">
                    <input type="submit" value="Enviar">
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>