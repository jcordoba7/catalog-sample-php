<?php

	function convertirUTF8($content)
	{
		//echo "<strong>Contenido:</strong><br/><br/>" . $content . "<br/><br/><br/>";

	    $content = str_replace('"',"&#34",$content);
		$content = str_replace("\\","",$content);
		$content = str_replace("\n","<br/>",$content);
		
		$content = str_replace("á",'&aacute;',$content);
		$content = str_replace("é","&eacute;",$content);
		$content = str_replace("í","&iacute;",$content);
		$content = str_replace("ó","&oacute;",$content);
		$content = str_replace("ú","&uacute;",$content);
		
		$content = str_replace("Á","&Aacute;",$content);
		$content = str_replace("É","&Eacute;",$content);
		$content = str_replace("Í","&Iacute;",$content);
		$content = str_replace("Ó","&Oacute;",$content);
		$content = str_replace("Ú","&Uacute;",$content);

		//echo "<strong>Contenido Modificado:</strong><br/><br/>" . $content . "<br/><br/><br/>";

		return $content;
	}
					
					
?>