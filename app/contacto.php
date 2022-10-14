<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8" />
    
	<title name = "nombrenegocio">Nombre del Negocio: Productos A</title>
	<link rel="stylesheet" href="style/smartTownCss.css" type="text/css" media="screen" />
	<link rel="shortcut icon" href="img/favicon.ico"/>
        
    <!--Scripts de galeria-->
    <script type="text/javascript" src="highslide/highslide-with-gallery.js"></script>
	<script type="text/javascript" src="highslide/highslide.config.js" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="highslide/highslide.css" />
    <!--[if lt IE 7]>
    <link rel="stylesheet" type="text/css" href="highslide/highslide-ie6.css" />
    <![endif]-->
    
    <script src="scripts/funcionesJS.js"></script>
    <script src="scripts/readfile.js"></script>
    
</head>
<body onLoad="readFileId('texto-home');readFileName('nombrenegocio');readFileName('slogannegocio');readFileName('producto1');">

    <div id = "editar-texto">
        <form action="scriptsphp/write.php" method="post" style="margin-left:10px;margin-top:5px;" name="editartexto">
            <strong>Ingrese el Texto:</strong>
            <br/>
            <textarea type="text" id="textoNuevo" name="texto" style="width:570px;height:340px;overflow:auto;" ></textarea>
            <br/>
            <input type="submit" value="  Aceptar  "/>
            <input type="text" name="url" id="url" style="visibility:hidden;"/>
            <input type="text" name="tipoelem" id="tipoelem" style="visibility:hidden;"/>          
        </form>      
    </div>
        

	<header>
        <script src="scripts/header.js"></script>
    </header>
	
    <nav>
		<script src="scripts/menubar.js"></script>
	</nav>
	
	<div id="bloque"></div>

    <br/>
	
	<div id="content">		
        
        <div align = center>
            <div align = left style = "display:inline-block;">

                <header>
                    <h2>¡CONTÁCTANOS!</h2>
                </header>

                <form action="scriptsphp/enviar-email.php" method="post" style="margin-top:5px;" name="" enctype="multipart/form-data">
                    <strong>Nombre:</strong>
                    <br/>
                    <input title="Nombre" id="nombrecliente" name="nombrecliente" type="text" />
                    <br/>
                    <br/>
                    <strong>Tu correo:</strong>
                    <br/>
                    <input title="Correo" id="correocliente" name="correocliente" type="text" />                            
                    <br/>
                    <br/>                
                    <strong>Mensaje:</strong>
                    <br/>
                    <textarea type="text" id="mensaje" name="mensaje" style="height:250px;overflow:auto;" ></textarea>
                    <br/>
                    <br/>
                    <input type="submit" name="submit" value="  Enviar  "/>
                </form>
            </div>
        </div>  

        <br/>
        <br/>
		
	</div>
	<footer>
		<script src="scripts/footer.js"></script>
        <input id="acceder" type="button" value=" Adm " onClick="accederCuenta()"/>
	</footer>
	
</body>
</html>