<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>URBANMOVE</title>
		<meta name="description" content="Actualización de productos">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

		<!-- STYLES -->

		<style {csp-style-nonce}>
			* {
				transition: background-color 300ms ease, color 300ms ease;
			}
			*:focus {
				background-color: rgba(221, 72, 20, .2);
				outline: none;
			}
			html, body {
				color: rgba(33, 37, 41, 1);
				font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
				font-size: 16px;
				margin: 0;
				padding: 0;
				-webkit-font-smoothing: antialiased;
				-moz-osx-font-smoothing: grayscale;
				text-rendering: optimizeLegibility;
			}
			header {
				background-color: rgb(192, 237, 240);
				padding: .4rem 0 0;
			}
			.menu {
				padding: .4rem 2rem;
			}
			header ul {
				border-bottom: 1px solid rgba(242, 242, 242, 1);
				list-style-type: none;
				margin: 0;
				overflow: hidden;
				padding: 0;
				text-align: center;
			}
			header li{
				display: inline-block;
			}
			header li.nombre{
				float: left;
				padding-top: 15px;
				padding-left: 555px;
				color: black;
			}
			header h1{
				text-align: center;
			}
			header li a {
				border-radius: 5px;
				color: rgba(0, 0, 0, .5);
				display: block;
				height: 44px;
				text-decoration: none;
			}
			header li.menu-item a {
				border-radius: 5px;
				margin: 5px 0;
				height: 38px;
				line-height: 36px;
				padding: .4rem .65rem;
				text-align: center;
			}
			header li.menu-item a:hover,
			header li.menu-item a:focus {
				background-color: rgba(221, 72, 20, .2);
				color: rgba(221, 72, 20, 1);
			}
			header .logo {
				float: left;
				height: 44px;
				padding: .4rem .5rem;
			}
			header .menu-toggle {
				display: none;
				float: center;
				font-size: 2rem;
				font-weight: bold;
			}
			header .menu-toggle button {
				background-color: rgba(221, 72, 20, .6);
				border: none;
				border-radius: 3px;
				color: rgba(255, 255, 255, 1);
				cursor: pointer;
				font: inherit;
				font-size: 1.3rem;
				height: 36px;
				padding: 0;
				margin: 11px 0;
				overflow: visible;
				width: 40px;
			}
			header .menu-toggle button:hover,
			header .menu-toggle button:focus {
				background-color: rgba(221, 72, 20, .8);
				color: rgba(255, 255, 255, .8);
			}
			section a {
				width: 100%;
				color: rgba(221, 72, 20, 1);
			}
		
		
			#nombretabla{
				width: 50%;
				height: 36px;
			}
			#descripcion{
				width: 50%;
				height: 36px;
			}
			#valoracion{
				width: 47%;
				height: 36px;
			}
			#imagen{
				width: 55%;
				height: 36px;
			}
			#crear {
				width: 10%;
				height: 36px;
				margin-left: 35%;
			}
			#modificar {
				width: 10%;
				height: 36px;
				margin-left: 35%;
			}
			#eliminar {
				width: 10%;
				height: 36px;
				margin-left: 35%;
			}
			tr:nth-child(1n){
			  	line-height: 100px;
  				background-color: white;
			}
			@media (max-width: 559px) {
				header ul {
					padding: 0;
				}
				header .menu-toggle {
					padding: 0 1rem;
				}
				header .menu-item {
					background-color: rgba(244, 245, 246, 1);
					border-top: 1px solid rgba(242, 242, 242, 1);
					margin: 0 15px;
					width: calc(100% - 30px);
				}
				header .menu-toggle {
					display: block;
				}
				header li.menu-item a {
					background-color: rgba(221, 72, 20, .1);
				}
				header li.menu-item a:hover,
				header li.menu-item a:focus {
					background-color: rgba(221, 72, 20, .7);
					color: rgba(255, 255, 255, .8);
				}
			}

.contenedor {
	width: 980px;
	margin: 0 auto;	
	padding: 2em;	
}

#grafica, #consulta {
	padding: 18px 20px;	
	text-align:center;
}

.form {
	text-align: center;
	margin: 0 auto;	
	max-width: 220px;
}

table {
	text-align: center;
	cursor: pointer;
	padding:8px;
	width: 100%;
}



th {
	background: rgb(66, 159, 202); 
	border-color: rgb(66, 159, 202);
	text-align: center;
}

tr, td {
	border: 1px solid rgb(66, 159, 202);
	text-align: center;
	border-radius: 5px;
}

		</style>
	</head>
	<body>

		<!-- HEADER: MENU + HEROE SECTION -->
		<header>
			<div class="menu">
				<ul>
					<li class="logo">
						<a href="logoJRCJ.docx" target="_blank">
						<img height="44" title="Logo JRCJ"	alt="Visita la website JRCJ"src="logo JRCJ.png"/>
						</a>
					</li>
					<li class="empresa"><b>URBANMOVE</b></li>
				</ul>
			</div>


			<div class="menu">
				<ul>
					<li class="menu-item hidden"><a href="#">Inicio</a></li>
					<li class="menu-item hidden"><a href="#" target="_blank">Sobre Nosotros</a></li>
					<li class="menu-item hidden"><a href="#" target="_blank">Contacto</a></li>
					<li class="menu-item hidden"><a href="#" target="_blank">Admin</a></li>
					<li class="menu-item hidden">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</li>
					<li class="menu-item hidden"><a href="#">Registro</a></li>
					<li class="menu-item hidden"><a href="#">Iniciar Sesión</a></li>
				</ul>
			</div>
			<br><br>
			<h1>ADMINISTRACIÓN DE PRODUCTOS</h1>
		</header>
		<!-- CONTENT -->
		<section>
				
				<?php
					//conectamos con la BBDD
					$con = mysql_connect("localhost", "id5059512_proyecto", "3I7G5eeVWLjUevI") or die ("no se conecto con phpmyadmin");
					mysql_select_db("id5059512_proyecto", $con) or die ("no se conecta con la BBDD");
					
					if(!isset($numcodparte)){
						//relizamos una consulta select para que no muestre los resultados con al condicion del codigo del parte
						$sql = "SELECT ProductoId, Nombre, Descripcion, Foto
		                  		FROM producto";

						$resultado = mysql_query($sql,$con) or die("<center><br><br><br><h4>NO PUDO INGRESAR EL REGISTRO 1</h4><br><br><br></center>");
									
						echo "<form name='ejecuta' method='post' action=''>";
						echo "<table>";

						$i = 0;
						//realizamos la consulta para listar las tablas en la base de datos
						echo "<tr><td>Numeración</td><td>Nombre</td><td>Descripción</td><td>Foto</td></tr>";
						while ($fila = mysql_fetch_array($resultado)){
							echo"				
								<tr class='producto'>
		    						<th><input name='ProductoId[$i]' value='".$fila[0]."' readonly='readonly'/></th>
		    						    					
		    						<th><input name='Nombre[$i]' value='".$fila[1]."'/></th>
		    						
		    						<th><input name='Descripcion[$i]' value='".$fila[2]."'/></th>

		    						<th><img name='Foto[$i]' src='foto/".$fila[3]."' width='100px' height='100px'></th>
		    						    						   					   
		    						<th><input type='checkbox' name='seleccion[$i]' value='modifica".$fila[0]."'></th>  		
		    					
		    				    </tr>
							";	
							$i++; 		
						}
						
						echo "</form></table>";		
					} 
					foreach ($_POST['seleccion'] as $indice => $valor){
						//extraemos la parte de la cadena que elimina y/o modifica 
						$opcion = substr ($_POST['seleccion'][$indice],0,8); 

						if($opcion == "modifica"){	
							//realizem el update 
							$sql1 = "UPDATE producto SET Nombre='".$_POST['Nombre'][$indice]."', Descripcion='".$_POST['Descripcion'][$indice]."', SeccionId='".$_POST['SeccionId'][$indice]."'
								
								WHERE ProductoId='".$_POST['ProductoId'][$indice]."'";

							$result = mysql_query($sql1);

							if (! $result){
								die ('ERROR AL MODIFICAR EL REGISTRO'. mysql_error());
								echo '<center>Error ocurrido al modificar datos en el sistema. Contacte con el administrador</center>';
							}else{
								//echo '<center>Datos modificados correctamente</center>';
								echo '<meta http-equiv="Refresh" content="0; URL=admon_prod.php">';
							}
						}			
					}	
				?>


				<div id="listadossubmit">	
					<center>
		   			<input type='submit' value='Enviar' class='boton'>
		    		<br>
		    		<form action="index.php" >
		   				<input type="submit" value="Volver" class="boton">
		 	  		</form>
		 	  	</center>
				</div>


		</section>
	</body>
</html>
