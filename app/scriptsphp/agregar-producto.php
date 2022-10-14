<?php
	
	include 'conversor-ut8.php';

	$nombreGaleria = $_POST['nombregaleria'];

	$urlGaleria = "../filestxt/" . $nombreGaleria . ".txt";

	$file = fopen($urlGaleria,'r');

	$encontro = false;
	
	while(!feof($file)) // Se buscara en el archivo de productos si el nuevo ya existe.
	{			
			$linea = fgets($file);

			if(strlen($linea) > 1) // Si la linea posee informacion de algun producto
			{
				$particion = preg_split("/[[]]+/", $linea);
		
				if($particion[0] == $_POST["nombreproducto"])
				{
					$encontro = true;
				}	
			}		
	}
	fclose($file);

	if($encontro == false)
	{	
		$allowedExts = array("jpg", "jpeg", "pjpeg", "png");

		if ((($_FILES["file"]["type"] == "image/gif")
			|| ($_FILES["file"]["type"] == "image/jpeg")
			|| ($_FILES["file"]["type"] == "image/jpg")
			|| ($_FILES["file"]["type"] == "image/pjpeg")
			|| ($_FILES["file"]["type"] == "image/png"))
			&& ($_FILES["file"]["size"] < 1000000)
			/*&& in_array($extension, $allowedExts)*/)
		
		{
			if($_FILES["file"]["error"] > 0)
			{
				echo "Return Code: " . $_FILES["file"]["error"] . "<br/>";
			}
			else
			{				
				if (move_uploaded_file($_FILES["file"]["tmp_name"],"../img/productos/" . $nombreGaleria . "/" . $_FILES["file"]["name"]))
				{
					$rutaImagen = "img/productos/" . "galeria" . "/" . $_FILES["file"]["name"];
					$nombreProducto = convertirUTF8($_POST["nombreproducto"]);
					$descripcionProducto = convertirUTF8($_POST["descripcionproducto"]);
					$precioProducto = convertirUTF8($_POST["precioproducto"]);
								
					//se agrega el bloque de codigo de la nueva imagen a la galeria.
					
					$file = fopen($urlGaleria,'r');
					
					$contenidoActual = fread($file,filesize($urlGaleria));
					
					//echo "<p>contenido del archivo: " . $content . "</p>";
					
					$nuevoProducto = $nombreProducto . "[]" . $descripcionProducto . "[]" . $precioProducto . "[]" . $rutaImagen . "\n";
									
					fclose($file);
					
					$file = fopen($urlGaleria,'w+');
					
					if(fwrite($file, $nuevoProducto . $contenidoActual))
					{
						echo "<br/><h2><p ALIGN=center style = 'color:blue;'>El producto " . $_POST["nombreproducto"] . " ha sido agregado exitosamente!!</p></h2>";
					}else{
						echo "<br/><h2><p ALIGN=center style = 'color:red;'>Oops! ... El producto " . $_POST["nombreproducto"] . " ha tenido problemas para ser agregado ...</p></h2>";
					}
					fclose($file);
				}
				else
				{
					echo "<br/><h2><p ALIGN=center style = 'color:red;'>Oops! ... La imagen de " . $_POST["nombreproducto"] . " ha tenido problemas para ser agregado ...</p></h2>";
					
				}	
			}	
		}
		else
		{	  
			echo "<br/><br/><strong>Archivo Inválido</strong><br/>";
			echo "Verifique que el formato de la imagen sea el correcto (jpg o png)...<br/>";
			echo "O verifique que el tamaño de la imagen sea menor a 1 MB...";
		}	
	}
	else
	{
		echo "<br/><h2><p ALIGN=center style = 'color:red;'>Oops! ... El producto " . $_POST["nombreproducto"] . " ya existe en el inventario ...</p></h2>";
	}

	echo '<p ALIGN=center><a href="../index.php"><button>Regresar</button></a></p>';
?>