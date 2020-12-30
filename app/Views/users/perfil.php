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
        <div class="perfil_salir">
            <a class ="btn_salir" href="/">Salir</a>
        </div>
        <div class="container_perfil">
            <div class="perfil_usuario_nombre">
                <p class="username"><?= session('Username'); ?></p>
            </div>

            <?php if(session('Admin') == 1 ): ?>
            <div class="perfil_admin">
                <a class ="btn_admin" href="/">Administración</a>
            </div>
            <?php endif; ?>  
            <div class="perfil_usuario_datos">
                <p class="exp">Experiencia: <?= session('Experiencia'); ?></p>
                <p></p>
                <p class="fecha">Fecha de Registro: <?= session('Registro'); ?></p> 
                <p class="valoracion">Valoraciones: <?= session('Valoraciones'); ?></p> 
            </div>
        </div>


        <div id="form-sesion" class="container_form">
            <form class="formulario_sesion" method="POST" action="userUpdate">
                <input type="text" id="username" name="username" placeholder="<?= session('Username'); ?>" value="" autocomplete="off" required>
                <input type="hidden" id="usuarioId" name="usuarioId" value="<?= session('UsuarioId');?>">
                <input type="submit" class="btn_modificar" value="Modificar">
            </form>
        </div>

        <div id="form-sesion" class="container_form">
            <form class="formulario_sesion" method="POST" action="userUpdate">
                <input type="email" id="email" name="email" placeholder="<?= session('Email'); ?>" value="" autocomplete="off" required>
                <input type="hidden" id="usuarioId" name="usuarioId" value="<?= session('UsuarioId');?>">
                <input type="submit" class="btn_modificar" value="Modificar">
            </form>
        </div>

        <div id="form-sesion" class="container_form">
            <form class="formulario_sesion" method="POST" action="userUpdate">
                <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" value="" required>
                <input type="hidden" id="usuarioId" name="usuarioId" value="<?= session('UsuarioId');?>">
                <input type="submit" class="btn_modificar" value="Modificar">
            </form>
        </div>

        <div id="form-sesion" class="container_form">
            <form class="formulario_sesion" method="POST" action="userUpdate">
                <input type="hidden" id="estadoUsuario" name="estadoUsuario" value=0>
                <input type="hidden" id="usuarioId" name="usuarioId" value="<?= session('UsuarioId');?>">
                <input type="submit" class="btn_eliminar" value="Eliminar Cuenta">
            </form>
        </div>
    </div>
    
    <div>
        <?php  if(session('Admin') == 1){ ?>
            <form action="create">
                <input type="submit" value="Crear Usuario" />
            </form>
            <form action="/producto/create">
                <input type="submit" value="Crear Producto" />
            </form>
        <?php }  ?>
    </div>


</body>
</html>