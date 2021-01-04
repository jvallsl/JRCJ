<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("/css/normalice.css")?>">
    <link rel="stylesheet" media="only screen and (min-width:1024px)" href=<?= base_url("/css/admin.css")?>>
    <title>Administración</title>
</head>
<body>
    <div class="container">
        <div class="admin_salir">
            <a class ="btn_salir" href="/">Salir</a>
        </div>
        <div class="container_usuarios">
            <div class="perfil_usuario_nombre">
                <p class="username"> Usuarios.</p>
            </div>
        </div>

   
        <div class="container_users_cards">
            <?php foreach( $usuarios as $user): ?>
                <div class="user_card">
                    <p><?php echo $user['Username']; ?></p>
                    <p>ID: <?php echo $user['UsuarioId']; ?></p>
                    <p><?php echo $user['Registro']; ?></p>
                    <p>Exp: <?php echo $user['Experiencia']; ?></p>
                    <?php if( $user['Activo'] == 1): ?>
                        <p>Activo</p>
                    <?php else: ?>
                        <p>No Activo</p>
                    <?php endif; ?>
                    <?php if( $user['Administrador'] == 1): ?>
                        <p>Administrador</p>
                    <?php else: ?>
                        <p></p>
                    <?php endif; ?>
                    <a class="btn_modificar" href=<?=base_url('admin/update_user/='.$user['UsuarioId'])?>>Actualizar</a></th>
	    			<a class="btn_eliminar" href=<?php echo base_url('admin/erase_user/='.$user['UsuarioId']);?>>Eliminar</a></th>
                </div>
            <?php endforeach; ?>
        </div>

        <div id="form-sesion" class="container_form">
        <div class="form_title">
            <h2>Crear nuevo usuario</h2>
        </div>
        <?= \Config\Services::validation()->listErrors(); ?>
            <form class="formulario_sesion" method="POST" action="usuario/create">
                <input type="text" id="usuario" name="usuario" value="" autocomplete="off" placeholder="Username" required>
                <input type="email" id="email" name="email" value="" autocomplete="off" placeholder="Email" required>
                <input type="password" id="pass" name="pass" autocomplete="off" placeholder="Password" required>
                <input type="hidden" id="usuarioId" name="usuarioId" value="<?= session('UsuarioId');?>">
                <div class="cntn_btn_form">
                    <input class="btn_form"  type="submit" value="Crear" name="submit" id="crear">
                    <input class="btn_form"  type="reset" value="Cancelar" id="cancelar">
                </div>
            </form>
        </div>
        
    </div>

</body>
</html>