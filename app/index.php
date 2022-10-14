<!DOCTYPE html>
<html lang="es">
<head>
	<title name = "nombrenegocio" >Nombre Negocio</title>
	<link rel="stylesheet" href="style/smartTownCss.css" type="text/css" media="screen" />
	<script type="text/javascript" src="scripts/jQuery/jquery.js"></script>
	<link rel="shortcut icon" href="img/favicon.ico"/>
	<meta name="description" content="Smart Town es una iniciativa liderada por la Secretaría de Ciencia, Tecnología e Innovación de la Gobernación de Cundinamarca y operado por la Pontificia Universidad Javeriana con el apoyo de la Universidad de los Andes y la Corporación Universitaria Minuto de Dios. Talento e Innovación Aplicada al Territorio">
	<meta name="keywords" content="Smart Town,smart town,Smart town,smarttown,Gobernación Cundinamarca,Secretaría de Ciencias,Secretaría de Ciencia Tecnología e Innovación,Pontificia Universidad Javeriana,javeriana,Universidad Minuto de Dios,uniminuto,Universidad de los Andes,uniandes,Enrique Gonzáles,Patricia Leon Ochoa,Proyecto de Regalias,Talento e Innovación Aplicada al Territorio">
	<meta name="author" content="Pontificia Universidad Javeriana">
	<meta charset="utf-8" />
    
    <script type="text/javascript" src="scripts/jQuery/efectointro.js"></script>
        
	<script src="scripts/funcionesJS.js"></script>
    <script src="scripts/readfile.js"></script>    
    
</head>	
<body onLoad="readFileId('texto-home');readFileName('nombrenegocio');readFileName('slogannegocio');readFileName('producto1');">

	<div id="editar-texto">
        <form action="scriptsphp/write.php" method="post" style="margin-left:10px;margin-top:5px;" name="editartexto">
           <strong>Ingrese el Texto:</strong>
           <br/>
           <textarea type="text" id="textoNuevo" name="texto" style="width:570px;height:340px;overflow:auto;" ></textarea>
           <br/>
           <input type="submit" value="  Aceptar  "/>
           <input type="text" name="url" id="url" style="visibility:hidden;">
           <input type="text" name="tipoelem" id="tipoelem" style="visibility:hidden;">           
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
	<br/>
	
	<div id="intro"></div>
	<div id="content">    
		<div id="mainContent">
			<section>
				<article class="blogPost">
					<header>
						<h2 name = "nombrenegocio">NOMBRE DEL NEGOCIO</h2>
						<!--<p>Posted on <time datetime="2014-11-09T14:12-05:00">Noviembre 9 2014</time> por <a href="#">SmartTown</a></p>-->
					</header>
					<div>                    	
						<p id="texto-home" style="text-align: justify;" >
							...
						</p>
						<input type="button" name="edit" value="Edit Texto" onclick="editarTexto('texto-home','texto')" style="visibility:hidden;"/>
                	</div>
				</article>
			</section>
		</div>
	</div>
	<footer>
		<script src="scripts/footer.js"></script>    
	    <input id="acceder" type="button" value=" Adm " onclick="accederCuenta()"/>       
	</footer>
	
</body>
</html>