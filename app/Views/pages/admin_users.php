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
        <div class="form_title">
            <h2>Crear nuevo usuario</h2>
        </div>
        <div id="form-sesion" class="container_form">
        <?= \Config\Services::validation()->listErrors(); ?>
            <form class="formulario_sesion" method="POST" action="usuario/create">
                <input type="text" id="usuario" name="usuario" value="" autocomplete="off" placeholder="Username" required>
                <input type="email" id="email" name="email" value="" autocomplete="off" placeholder="Email" required>
                <input type="password" id="pass" name="pass" autocomplete="off" placeholder="Password" required>
                <input type="hidden" id="usuarioId" name="usuarioId" value="<?= session('UsuarioId');?>">
                <input type="submit" value="Crear" name="submit" id="crear">
                <input type="reset" value="Cancelar" id="cancelar">
            </form>
        </div>

		<table>
			<tr><td>Numeración</td><td>Nombre</td><td>Correo</td><td>Registro</td><td>Experiencia</td><td>Activo</td><td>Administrador</td></tr>
			<?php
			foreach ($usuarios as $user):
				?>				
					<tr class='producto'>
						<th><?php echo $user['UsuarioId']; ?></th>
	    				<th><?php echo $user['Username']; ?></th>
	    				<th><?php echo $user['Email']; ?></th>
	    				<th><?php echo $user['Registro']; ?></th>
	    				<th><?php echo $user['Experiencia']; ?></th>
	    				<th><?php echo $user['Activo']; ?></th>
	    				<th><?php echo $user['Administrador']; ?></th>
	    				<th><a href="<?php echo base_url('admin/update_user/='.$user['UsuarioId'])?>" >Update</a></th>
	    				<th><a href="<?php echo base_url('admin/erase_user/='.$user['UsuarioId']);?>" >Erase</a></th>
				    </tr>
				<?php endforeach; ?>
        </table>
        
        <div class="container_users">
            <div class="user_card">
                <p><?php echo $user['Username']; ?></p>
                <p>ID: <?php echo $user['UsuarioId']; ?></p>
                <p><?php echo $user['Registro']; ?></p>
                <p><?php echo $user['Experiencia']; ?></p>
                <p><?php echo $user['Activo']; ?></p>
                <p><?php echo $user['Administrador']; ?></p>
            </div>
        </div>
    </div>

</body>
</html>