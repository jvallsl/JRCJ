<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("/css/normalice.css")?>">
    <link rel="stylesheet" media="only screen and (min-width:1024px)" href=<?= base_url("/css/admin.css")?>>
    <title>Actualizar Producto</title>
</head>
<body>
	<div class="container">
        <div class="admin_salir">
            <a class ="btn_salir" href="/">Salir</a>
        </div>
        <div class="container_usuarios">
            <div class="perfil_usuario_nombre">
                <p class="username"> Actualizar Productos.</p>
            </div>
        </div>
		<div class="container_users_cards">
            
			<div >
				<form class="update_product_card" method="post" action="<?php echo base_url('admin/updateProducto');?>">
					<input hidden name="id" value="<?php echo $producto['ProductoId']; ?>">	
					<input class="update_name" type = "text" name="productName" value ="<?php echo $producto['Nombre']; ?>" placeholder='<?php echo $producto['Nombre']; ?>'/>
					<p>ID: <?php echo $producto['ProductoId']; ?></p>
					<img class="img_card" src='/img/<?php echo $producto['Imagen']; ?>'/>
					<div class="update_card_description">
						<textarea name='productDescription' value ="<?php echo $producto['Descripcion']; ?>">
						<?php echo $producto['Descripcion']; ?>
						</textarea>
					</div>
					<input class="btn_form" type="submit" value="Actualizar">
				</form>
			</div>
            
        </div>
	</div>
 		
</body>
</html>
