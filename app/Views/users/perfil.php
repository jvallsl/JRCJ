<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
    <div class="container_perfil">

        <div class="perfil_usuario">
            <p>Nombre: <?= session('Username'); ?></p>
            <p>Experiencia: <?= session('Experiencia'); ?></p> 
            <p>Email: <?= session('Email'); ?></p> 
            <p>Administrador: <?= session('Admin'); ?></p> 
        </div>

        <div class="datos_perfil">

        </div>
    </div>


</body>
</html>