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
<body onLoad="readFileName('nombrenegocio');readFileName('slogannegocio');readFileName('producto1');">

    <div id="agregar-producto">
        <form action="scriptsphp/agregar-producto.php" method="post" style="margin-left:10px;margin-top:5px;" name="editarimagen" enctype="multipart/form-data">
            <strong>Ingrese el nombre del Producto:</strong>
            <input title="Nombre del Producto" id="nombreproducto" name="nombreproducto" type="text" />
            <br/>
            <br/>
            <strong>Ingrese la descripción del Producto:</strong>
            <br/>
            <textarea type="text" id="descripcionproducto" name="descripcionproducto" style="width:570px;height:250px;overflow:auto;" ></textarea>
            <br/>
            <strong>Precio (Pesos Colombianos):</strong>
            <input title="Precio del Producto" id="precioproducto" name="precioproducto" type="text" />
            <br/>
            <br/>                
            <strong>Foto:</strong>
            <input type="file" name="file" id="file"><br/>
            <br/>
            <input type="submit" name="submit" value="  Aceptar  "/>
            <input type="text" name="nombregaleria" id="nombregaleria" style="visibility:hidden;" />
        </form>
    </div>

     <div id = "eliminar-producto">
        <form action="scriptsphp/eliminar-producto.php" method="post" style="margin-left:10px;margin-top:5px;" name="eliminarproducto">
            <strong>Ingrese el Nombre del producto que desea eliminar:</strong>
            <br/><br/>
            <input title="Nombre del Producto" id="nombreproducto2" name="nombreproducto2" type="text" />
            <br/><br/>
            <input type="submit" value="  Aceptar  "/>
            <input type="text" name="nombregaleria2" id="nombregaleria2" style="visibility:hidden;"/> 
        </form>      
    </div>

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
                    <h2>¡CATÁLOGO DE PRODUCTOS A!</h2>
                </header>
                    
                <input type="button" name="edit" value="  Agregar Producto  " onClick="agregarProducto('galeria')" style="visibility:hidden;"/>
                <input type="button" name="edit" value="  Eliminar Producto  " onClick="eliminarProducto('galeria')" style="visibility:hidden;"/>
                <div id="galeria">
                    
                    <?php $nombreGaleria = 'galeria'; include 'scriptsphp/cargar-productos.php'; ?>

                </div><!--fin de galeria-->
            </div>
        </div> 

        
        
    </div>
    <footer>
        <script src="scripts/footer.js"></script>
        <input id="acceder" type="button" value=" Adm " onClick="accederCuenta()"/>
    </footer>
    
</body>
</html>