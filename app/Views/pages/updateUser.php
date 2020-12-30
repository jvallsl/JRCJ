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
 		
 		<form method="post" action="<?php echo base_url('admin/saveUser');?>">
 			<input hidden name="id" value="<?php echo $usuario['UsuarioId']; ?>">		
			<th><?php echo $usuario['UsuarioId']; ?></th>
		    <th><input type = "text" name="userExp" value ="<?php echo $usuario['Experiencia']; ?>" placeholder='<?php echo $usuario['Experiencia']; ?>'/></th>
		    <th><input type="text" name='userAct' value ="<?php echo $usuario['Activo']; ?>" placeholder='<?php echo $usuario['Activo']; ?>'/></th>
		    <th><input type="text" name='userAdmin' value ="<?php echo $usuario['Administrador']; ?>" placeholder='<?php echo $usuario['Administrador']; ?>'/></th>
			<th><input type="submit" value="enviar"></th>
 		</form>

</body>
</html>
