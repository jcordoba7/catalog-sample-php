var contrasena = "123";

function accederCuenta()
{
  if(document.getElementById("acceder").value == " Adm ")
  {	
    var x = prompt("Ingrese el Password para el ManageMode:");
    if(x != null)
    {
      if(x == contrasena)
      {
	    visibilidadBotones("visible");
	    document.getElementById("acceder").value = "Terminar Edicion";
      }else{
	    alert("Password Incorrecto!");
      }
    }
   }else{
	  visibilidadBotones("hidden"); 
	  document.getElementById("acceder").value = "Administrador";
	  document.getElementById("editar-texto").style.visibility = "hidden";
	  document.getElementById("agregar-producto").style.visibility = "hidden";
    document.getElementById("eliminar-producto").style.visibility = "hidden";

	  alert("Modo de Edicion finalizado.");
  }
}

function editarTexto(id,tipoContenido)
{
  document.getElementById("editar-texto").style.visibility = "visible";
  
  document.getElementById("textoNuevo").value = "";
  
  document.getElementById("url").value = "../filestxt/" + id + ".txt";
  document.getElementById("tipoelem").value = tipoContenido;
}

function agregarProducto(id)
{ 
  document.getElementById("agregar-producto").style.visibility = "visible";
    
  document.getElementById("nombreproducto").value = "";
  document.getElementById("descripcionproducto").value = "";
  document.getElementById("file").value = "";
    
  document.getElementById("nombregaleria").value = id;
}

function eliminarProducto(id)
{
  document.getElementById("eliminar-producto").style.visibility = "visible";
  
  document.getElementById("nombreproducto2").value = "";
  
  document.getElementById("nombregaleria2").value = id;
}

function visibilidadBotones(value)
{
  for(var i=0; i<document.getElementsByName("edit").length;i++)
  {     
    document.getElementsByName("edit").item(i).style.visibility = value;
  }
}