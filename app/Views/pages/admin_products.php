
<body>	
	<table>
		<tr><td>Numeración</td><td>Nombre</td><td>Descripción</td><td>Imagen</td></tr>
		<?php
		foreach ($productos as $producto):
			?>				
				<tr class='producto'>
					<th><?php echo $producto->ProductoId; ?></th>
					<th><?php echo $producto->Nombre; ?></th>
					<th><?php echo $producto->Descripcion; ?></th>
					<th><img name='<?php echo $producto->Imagen; ?>' src='/img/<?php echo $producto->Imagen; ?>' width='100px' height='100px'/></th>
					<th><a href=<?=base_url('admin/update/='.$producto->ProductoId)?> style="padding:20px 10px 20px 10px; background-color:green; color:white; text-decoration:none;">Update</a></th>
					<th><a href="<?php echo base_url('admin/erase/='.$producto->ProductoId);?>" style="padding:20px 10px 20px 10px; background-color:red; color:white;text-decoration:none;">Erase</a></th>
				</tr>
			<?php endforeach; ?>
	</table>

</body>
</html>
