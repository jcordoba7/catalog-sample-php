<?php

	$file = fopen("filestxt/" . $nombreGaleria . ".txt",'r');
	$contenido = "";
	
	while(!feof($file))
	{			
			$linea = fgets($file);

			if(strlen($linea) > 1) // Si la linea posee informacion de algun producto
			{
				$particion = preg_split("/[[]]+/", $linea);
		
				$nombreProducto = $particion[0];
				$descripcionProducto = $particion[1];				
				$precioProducto = '$' . $particion[2];
				$rutaImagen = $particion[3];
				
				$contenido .= ' <div id="foto">	            
								  	<!--[if lt IE 9]>
								  	<a href="' . $rutaImagen . '" class="highslide" onclick="return hs.expand(this)"> <img src="../img/fondo-img.png" title="<strong>' . $nombreProducto . '</strong><br/><br/>' . $descripcionProducto . '<br/><br/><div align = right><strong>' . $precioProducto . '</strong></div>" style=" background:url(' . $rutaImagen . ') center;  background-size:contain; height:140px; width:140px;" /></a><![endif]-->
								   
								  	<!--[if ! lt IE 9]><!-->										  	
								  	<a href="' . $rutaImagen . '" class="highslide " onclick="return hs.expand(this)" title="<strong>' . $nombreProducto . '</strong><br/><br/>' . $descripcionProducto . '<br/><br/><div align = right><strong>' . $precioProducto . '</strong></div>">										  											   		
								  		<img src="' . $rutaImagen . '" title="' . $nombreProducto . '" style=" background: url(' . $rutaImagen . ')no-repeat center; background-color:#FFF; background-size:contain; /*border-radius:15px;*/ width:140px; height:140px; border-width:1px;">										  		
								   	</a><!--<![endif]-->
								   	<strong>' . $nombreProducto . '</strong>
								</div>';
			}		
		
	}
	
	fclose($file);
	
	echo $contenido;
?>