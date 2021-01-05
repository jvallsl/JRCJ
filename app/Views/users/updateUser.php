<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("/css/normalice.css")?>">
    <link rel="stylesheet" media="only screen and (min-width:1024px)" href=<?= base_url("/css/admin.css")?>>
    <title>Actualizar Usuario</title>
</head>
<?php
	if($usuario['Activo'] == 1){
		$activo = 'Activo';

	}else{
		$activo = 'No Activo';
	}

	if($usuario['Administrador'] == 1){
		$admin = 'Administrador';
	}else{
		$admin = 'Usuario';
	}

?>
<body>
    <div class="container">
        <div class="admin_salir">
            <a class ="btn_salir" href="/">Salir</a>
        </div>
        <div class="container_usuarios">
            <div class="perfil_usuario_nombre">
                <p class="username">Actualizar Usuario</p>
            </div>
        </div>

        <div class="container_users_cards">
        
			<div>
				<form class="user_card" method="post" action="<?php echo base_url('admin/saveUser');?>">
					<input hidden name="id" value="<?php echo $usuario['UsuarioId']; ?>">	
					<p>Username: <?php echo $usuario['Username'] ?></p>	
					<p>ID: <?php echo $usuario['UsuarioId']; ?></p>
					<select name="userExp">
						<option value ="<?php echo $usuario['Experiencia']; ?>" selected>-- <?php echo $usuario['Experiencia']; ?> --</option>
						<option value ="Principiante" >Principiante</option>
						<option value ="Intermedio" >Intermedio</option>
						<option value ="Experto" >Experto</option>
					</select>
					<select name="userAct">
						<option value ="<?php echo $usuario['Activo']; ?>" selected>-- <?php echo $activo; ?> --</option>
						<option value="1">Activo</option>
						<option value="0">No Activo</option>
					</select>
					<select name="userAdmin">
						<option value ="<?php echo $usuario['Administrador']; ?>" selected>-- <?php echo $admin ?> --</option>
						<option value="1">Administrador</option>
						<option value="0">Usuario</option>
					</select >
					<input class="btn_form" type="submit" value="Actualizar">
				</form>
			</div>
		
        </div>
    
    </div>

</body>
</html>
