<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("/css/normalice.css")?>">
    <link rel="stylesheet" media="only screen and (min-width:1024px)" href=<?= base_url("/css/admin.css")?>>
    <title>Administración Productos</title>
</head>
<body>
    <div class="container">
        <div class="admin_salir">
            <a class ="btn_salir" href="/">Salir</a>
        </div>
        <div class="container_usuarios">
            <div class="perfil_usuario_nombre">
                <p class="username"> Productos.</p>
            </div>

        </div>

        <div class="container_users_cards">
            <?php foreach( $productos as $producto): ?>
                <div class="product_card">
                    <p><?php echo $producto->Nombre; ?></p>
                    <p>ID: <?php echo $producto->ProductoId; ?></p>
                    <img class="img_card" src='/img/<?php echo $producto->Imagen; ?>'/>
                    <div class="card_description">
                        <p><?php echo $producto->Descripcion; ?></p>
                    </div>
                    <a class="btn_modificar" href=<?=base_url('admin/update/='.$producto->ProductoId)?>>Actualizar</a></th>
	    			<a class="btn_eliminar" href=<?php echo base_url('admin/erase/='.$producto->ProductoId);?>>Eliminar</a></th>
                </div>
            <?php endforeach; ?>
        </div>


        <div id="form-sesion" class="container_form">
        <div class="form_title">
            <h2>Añadir nuevo producto</h2>
        </div>
        <?= \Config\Services::validation()->listErrors(); ?>
            <form class="formulario_sesion" method="POST" action="/producto/create">
                <input type="text" id="nombretabla" name="nombre" autocomplete="off" placeholder="Nombre Producto" required>
                <input  type="text" id="imagen" name="imagen" required autocomplete="off" placeholder="Imagen: ejemplo.jpg">
                <select name="seccion" id="seccion">
                    <option selected> -- Sección -- </option>
                    <option value="1">Bicicletas</option>
                    <option value="2">Patinetes</option>
                    <option value="3">Servicios</option>
                </select>
                <textarea name="descripcion">Descripción del producto.</textarea value="" autocomplete="off" required>
                <div class="cntn_btn_form">
                    <input class="btn_form"  type="submit" value="Crear" name="submit" id="crear">
                    <input class="btn_form" type="reset" value="Cancelar" id="cancelar">
                </div>

            </form>
        </div>


    </div>
        

</body>
</html>