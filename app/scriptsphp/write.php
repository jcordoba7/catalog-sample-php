<?php

	include 'conversor-ut8.php';

	$file = fopen($_POST["url"],'w+');
	if($file)
	{
	  switch($_POST["tipoelem"])	
	  {
		 case("texto"): $content = $_POST["texto"];
		 
		 				$content = convertirUTF8($content);
						
		                break;
						
		 case("nuevaimagen"): $content = $_POST["texto"];
		 					  break;	 
	  }
	  
	  if(fwrite($file, $content))
	  {
		echo "<br/><h2><p ALIGN=center style = 'color:blue;'>El contenido se ha modificado correctamente.</p></h2>";
	  }else{
	    echo "Ops! hubo un error, intentalo de nuevo...";
	  }
	  fclose($file);
	}else{
	  echo "No se pudo modificar el contenido por denegación de acceso a los archivos.";
	}

	echo '<p align="center"><a href="../index.php"><button>Regresar</button></a></p>';

?>