<?php
	
	ini_set("session.cookie_lifetime","7200");
	ini_set("session.gc_maxlifetime","7200");
	session_start(); 
	include("conexion.php");

?>
<!DOCTYPE HTML>
<head>
	<title>Stivi Home Domotica</title>
	<meta name="description" content="Accionamientos y sensores">                                                      
            <meta http-equiv="refresh" content="(refreshPage); url=/">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="default">
		<meta name="viewport" content="width=device-width, user-scalable=no">
                <link rel="stylesheet" href="text.css" type="text/css" media="all">

		<style type="text/css"></style>
		</head>
                                                            
  	<body> 
	<div class="view">
	<div class="header-wrapper">
	<h1> Domotica Home </h1>
	</div>

	<div class="group-wrapper">
        <FORM>
       
        <h4 align="center">
        <input type=button onClick="location.href='///var/www/html/htmlintro.html'" value='Salir'>
	</h4>


        <table border="0" align="center">
        <tbody>
        <tr>
	<td>
        <h4>Temperatura</h4>
	</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
	<td>
	<h3>Temp&deg;C</h3>
	</td>
	<td></td>
        </tr>
                                                    
     <tr>
     <td>
     <h4>(Luces)</h4>
     </td>
     <td>
     <INPUT TYPE="button" VALUE="Entrar" onClick="parent.location='paginageneral.html'">
     </td>                                                                                  
        <td>
	<div class='red-circle'>
	<div class='glare'></div>
	</div>
	</td>
	<td>
	<div class='blackie-circle'>	
	<div class='glare'></div>
	</div>
	</td>
        <td>
        <div class='green-circle'>
        <div class='glare'></div>
        </div>
        </td>
        <td>
        <div class='black-circle'>
        <div class='glare'></div>
        </div>
        </td>
        </tr>

	<tr>
     <td>
     <h4>(Parametros)</h4>
     </td>
     <td>
     <INPUT TYPE="button" VALUE="Entrar" onClick="parent.location='///var/www/html/paginaparametros.html'">
     </td>                                                                                  
     <td>
	<div class='red-circle'>
	<div class='glare'></div>
	</div>
	</td>
	<td>
	<div class='blackie-circle'>	
	<div class='glare'></div>
	</div>
	</td>
        <td>
        <div class='green-circle'>
        <div class='glare'></div>
        </div>
        </td>
        <td>
        <div class='black-circle'>
        <div class='glare'></div>
        </div>
        </td>
        </tr>
	
<tr>
     <td>
     <h4>(Sensores)</h4>
     </td>
     <td>
     <INPUT TYPE="button" VALUE="Entrar" onClick="parent.location='///var/www/html/paginasensores.html'">
     </td>                                                                                
     <td>
	<div class='red-circle'>
	<div class='glare'></div>
	</div>
	</td>
	<td>
	<div class='blackie-circle'>	
	<div class='glare'></div>
	</div>
	</td>
        <td>
        <div class='green-circle'>
        <div class='glare'></div>
        </div>
        </td>
        <td>
        <div class='black-circle'>
        <div class='glare'></div>
        </div>
        </td>
        </tr>

	<tr>
     <td>
     <h4>(Electrodomestico)</h4>
     </td>
     <td>
     <INPUT TYPE="button" VALUE="Entrar" onClick="parent.location='///var/www/html/paginaelectrodomesticos.html'">
     </td>                                                                                  
     <td>
	<div class='red-circle'>
	<div class='glare'></div>
	</div>
	</td>
	<td>
	<div class='blackie-circle'>	
	<div class='glare'></div>
	</div>
	</td>
        <td>
        <div class='green-circle'>
        <div class='glare'></div>
        </div>
        </td>
        <td>
        <div class='black-circle'>
        <div class='glare'></div>
        </div>
        </td>
        </tr>
	
	<tr>
     <td>
     <h4>(Otros usos)</h4>
     </td>
     <td>
     <INPUT TYPE="button" VALUE="Entrar" onClick="parent.location='///var/www/html/paginaotrosusos.html'">
     </td>                                                                                  

     <td>
	<div class='red-circle'>
	<div class='glare'></div>
	</div>
	</td>
	<td>
	<div class='blackie-circle'>	
	<div class='glare'></div>
	</div>
	</td>
        <td>
        <div class='green-circle'>
        <div class='glare'></div>
        </div>
        </td>
        <td>
        <div class='black-circle'>
        <div class='glare'></div>
        </div>
        </td>
        </tr>


	</tbody>
	</table>
	</FORM>
	<tr>
        <h3 align="center">
	&copy; Autor - Esteban Vicario 
	<br> 
	Spain - Septiembre - 2019 - (rev)
	</h3>
	</tr>
	</div>
	</div>
     </body>
   </html> 