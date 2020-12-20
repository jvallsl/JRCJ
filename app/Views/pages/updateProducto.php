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
 		
 		<form method="post" action="<?php echo base_url('admin/updateProducto');?>">
 			<input hidden name="id" value="<?php echo $producto['ProductoId']; ?>">		
			<th><?php echo $producto['ProductoId']; ?></th>
		    <th><input type = "text" name="productName" value ="<?php echo $producto['Nombre']; ?>" placeholder='<?php echo $producto['Nombre']; ?>'/></th>
		    <th><input type="text" name='productDescription' value ="<?php echo $producto['Descripcion']; ?>" placeholder='<?php echo $producto['Descripcion']; ?>'/></th>
			<th><input type="submit" value="enviar"></th>
 		</form>

</body>
</html>
