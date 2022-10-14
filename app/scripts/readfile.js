// JavaScript Document

function readFileId(idDiv)
{
	var archivo = "filestxt/" + idDiv + ".txt";
	
	var xmlhttp;
	
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function()
	{
	  document.getElementById(idDiv).innerHTML = xmlhttp.responseText;    
	}
	
	xmlhttp.open("GET",archivo,true);
	xmlhttp.send();
}

function readFileName(nameDiv)
{
	var archivo = "filestxt/" + nameDiv + ".txt";
	
	var xmlhttp;
	
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function()
	{
	  for(var i=0; i<document.getElementsByName(nameDiv).length;i++)
	  {     
	    document.getElementsByName(nameDiv).item(i).innerHTML = xmlhttp.responseText;
	  }    
	}
	
	xmlhttp.open("GET",archivo,true);
	xmlhttp.send();
}