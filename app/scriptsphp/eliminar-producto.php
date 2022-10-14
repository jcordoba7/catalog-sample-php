<?php

	$nombreProducto = $_POST['nombreproducto2'];

	$nombreGaleria = $_POST['nombregaleria2'];

	//echo "Nombre: " . $nombreProducto . "<br/>";
	//echo "Nombre: " . $nombreGaleria . "<br/>";
		
	$file = fopen("../filestxt/" . $nombreGaleria . ".txt",'r');
	$contenido = "";
	$rutaImagen = "";
	$encontro = false;
	
	while(!feof($file))
	{			
			$linea = fgets($file);

			if(strlen($linea) > 1) // Si la linea posee informacion de algun producto
			{
				$particion = preg_split("/[[]]+/", $linea);
		
				if($particion[0] != $nombreProducto)
				{
					$contenido .= $particion[0] . "[]" . $particion[1] . "[]" . $particion[2] . "[]" . $particion[3] . "\n";
				}
				else
				{
					$encontro = true;
					$rutaImagen = $particion[3];
				}		
			}		
	}

	fclose($file);

	$file = fopen("../filestxt/" . $nombreGaleria . ".txt",'w+');
				
	if(fwrite($file, $contenido))
	{
		if($encontro == true)
		{
			$rutaImagen = '../' . $rutaImagen;

			/*if( unlink($rutaImagen) )
			{
				echo "<br/><h2><p ALIGN=center style = 'color:blue;'>El producto " . $_POST["nombreproducto"] . " ha sido eliminado exitosamente!!</p></h2>";
			}
			else
			{
				echo "<br/><h2><p ALIGN=center style = 'color:red;'>Oops! ... La imagen " . $_POST["nombreproducto"] . " ha tenido problemas para ser eliminada ...</p></h2>";	
			}*/
		}
		else
		{
			echo "<br/><h2><p ALIGN=center style = 'color:red;'>El producto " . $nombreProducto . " no se encuentra en el inventario ...</p></h2>";
		}
	}
	else
	{
		echo "<br/><h2><p ALIGN=center style = 'color:red;'>Oops! ... El producto " . $nombreProducto . " ha tenido problemas para ser eliminado ...</p></h2>";
	}

	fclose($file);

	echo '<p ALIGN=center><a href="../index.php"><button>Regresar</button></a></p>';
?>