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
                <p class="username">Nuevo Usuario</p>
            </div>
        </div>

        <div id="form-sesion" class="container_form">
        <?= \Config\Services::validation()->listErrors(); ?>
            <form class="formulario_sesion" method="POST" action=<?= base_url("usuario/create")?> >
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