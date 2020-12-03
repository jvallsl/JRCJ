<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("/css/normalice.css")?>">
    <link rel="stylesheet" media="only screen and (min-width:1024px)" href=<?= base_url("/css/perfil.css")?>>
    <title>Perfil</title>
</head>
<body>
    <div class="container">
        <div class="container_perfil">
            <div class="perfil_usuario_nombre">
                <p><?= session('Username'); ?></p>
            </div>
            <div class="perfil_salir">
                <p>Salir</p>
            </div>
            <div class="perfil_admin">
                <p>Admin</p>
            </div>
            
            <div class="perfil_usuario_datos">
                <p>Experiencia: <?= session('Experiencia'); ?></p>
                <p></p>
                <p>Fecha de Registro: <?= session('Registro'); ?></p> 
                <p>Valoraciones: <?= session('valoraciones'); ?></p> 
            </div>
        </div>

        <div id="form-sesion" class="container_form">
            <form class="formulario_sesion" method="POST" action="userUpdate">
                <input type="text" id="username" name="username" placeholder="<?= session('Username'); ?>" value="" autocomplete="off" required>
                <input type="hidden" id="usuarioId" name="usuarioId" value="<?= session('UsuarioId');?>">
                <input type="submit" value="Modificar">
            </form>
        </div>

        <div id="form-sesion" class="container_form">
            <form class="formulario_sesion" method="POST" action="userUpdate">
                <input type="email" id="email" name="email" placeholder="<?= session('Email'); ?>" value="" autocomplete="off" required>
                <input type="hidden" id="usuarioId" name="usuarioId" value="<?= session('UsuarioId');?>">
                <input type="submit" value="Modificar">
            </form>
        </div>

        <div id="form-sesion" class="container_form">
            <form class="formulario_sesion" method="POST" action="userUpdate">
                <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" value="" required>
                <input type="hidden" id="usuarioId" name="usuarioId" value="<?= session('UsuarioId');?>">
                <input type="submit" value="Modificar">
            </form>
        </div>

        <div id="form-sesion" class="container_form">
            <form class="formulario_sesion" method="POST" action="userUpdate">
                <input type="hidden" id="estadoUsuario" name="estadoUsuario" value=0>
                <input type="hidden" id="usuarioId" name="usuarioId" value="<?= session('UsuarioId');?>">
                <input type="submit" value="Eliminar Cuenta">
            </form>
        </div>
    </div>
    
   


</body>
</html>