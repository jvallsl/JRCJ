<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to CodeIgniter 4!</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

	<!-- STYLES -->

</head>
<body>
 		
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
	    				<th><a href="<?php echo base_url('admin/update_user/'.$user['UsuarioId'])?>" >Update</a></th>
	    				<th><a href="<?php echo base_url('admin/erase_user/'.$user['UsuarioId']);?>" >Erase</a></th>
				    </tr>
				<?php endforeach; ?>
		</table>

</body>
</html>
