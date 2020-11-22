<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("/css/normalice.css")?>">
    <link rel="stylesheet" media="only screen and (min-width:1024px)" href=<?= base_url("/css/header.css")?>>
    <link rel="stylesheet" media="only screen and (min-width:1024px)" href=<?= base_url("/css/product-page.css")?>>
    <link rel="stylesheet" media="only screen and (min-width:1024px)" href=<?= base_url("/css/product-page-view.css")?>>
    <link rel="stylesheet" media="only screen and (max-width:1023px)"href=<?= base_url("/css/product-page-movil.css")?>>
    <script src="<?= base_url("/javascript/login.js")?>"></script>
    <title>U.Move</title>
</head>
<body>
    <header>
        <div class="header_container" >
            <div class="logo">
                <p>Urban Move</p>
            </div>
            <div class="controles">
                <a class=" enlace_registro" href="#" title="Crear cuenta">
                    <svg class="new_user" width="25" viewBox="0 0 512 512">
                        <path d="M312,392h48v48a8,8,0,0,0,16,0V392h48a8,8,0,0,0,0-16H376V328a8,8,0,0,0-16,0v48H312a8,8,0,0,0,0,16Z"/>
                        <path d="M36.169,415.023C39.835,417.023,126.983,464,216,464a332.248,332.248,0,0,0,67.025-7.122A111.978,111.978,0,1,0,368,272c-2.142,0-4.268.066-6.38.186-25.414-38.012-61.228-63.9-102.114-74.624a96,96,0,1,0-86.978.017c-33.16,8.7-63.155,27.408-87.009,54.772C51.007,291.941,32,347.218,32,408A8,8,0,0,0,36.169,415.023ZM368,288a96,96,0,1,1-96,96A96.108,96.108,0,0,1,368,288ZM136,112a80,80,0,1,1,80,80A80.091,80.091,0,0,1,136,112ZM97.58,262.865C128.422,227.485,170.478,208,216,208c50.71,0,96.7,24.14,127.817,66.637A111.947,111.947,0,0,0,272.6,442.613,312.1,312.1,0,0,1,216,448c-74.188,0-149.593-35.583-167.958-44.844C49.013,348.164,66.517,298.5,97.58,262.865Z"/>
                    </svg>
                    Crear cuenta
                </a>
                <div id="boton-sesion" class="boton_sesion" title="Acceder" onclick="mostrarFormulario()">
                    <svg width="30" viewBox="0 0 512 512" id="power-on">
                        <path d="m256 0c-140.96875 0-256 115.050781-256 256 0 140.96875 115.050781 256 256 256 140.96875 0 256-115.050781 256-256 0-140.972656-115.050781-256-256-256zm0 482c-124.617188 0-226-101.382812-226-226s101.382812-226 226-226 226 101.382812 226 226-101.382812 226-226 226zm0 0"/>
                        <path d="m241 121h30v150h-30zm0 0"/>
                        <path d="m323.511719 139.070312-15.023438 25.96875c32.390625 18.734376 52.511719 53.589844 52.511719 90.960938 0 57.898438-47.101562 105-105 105s-105-47.101562-105-105c0-37.371094 20.121094-72.226562 52.511719-90.960938l-15.023438-25.96875c-41.628906 24.082032-67.488281 68.886719-67.488281 116.929688 0 74.4375 60.5625 135 135 135s135-60.5625 135-135c0-48.042969-25.859375-92.847656-67.488281-116.929688zm0 0"/>
                    </svg>
                </div>
            </div>
        </div>
    </header>

    <div id="form-sesion" class="container_form">
        <form class="formulario_sesion" method="POST" action="usuario/userLogin">
            <input type="text" id="username" name="username" placeholder="Username" value="" autocomplete="off">
            <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" value="">
            <input type="submit" value="Acceder">
        </form>
        
    </div>

