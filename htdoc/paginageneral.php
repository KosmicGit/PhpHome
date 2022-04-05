<?php
	
	ini_set("session.cookie_lifetime","7200");
	ini_set("session.gc_maxlifetime","7200");
	session_start(); 
	include("conexion.php");

?>
<!DOCTYPE HTML>
<head>
	<title>Home Domotica</title>
	<meta name="description" content="Accionamientos y sensores">                                                      
            <meta http-equiv="refresh" content="(refreshPage); url=/">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="default">
		<meta name="viewport" content="width=device-width, user-scalable=no">
                <link rel="stylesheet" href="css/text.css" type="text/css" media="all">

		<style type="text/css"></style>
		</head>
                                                            
  	<body> 
	<div class="view">
	<div class="header-wrapper">
	<h1>Proyecto </h1>
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
     <h4>(Luz salon)</h4>
     </td>
     <td>
     <INPUT TYPE="button" VALUE="On" onClick="parent.location='/?H1'">
     </td>                                                                                  
     <td>
     <INPUT TYPE="button" VALUE="Off" onClick="parent.location='/?L1'">
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
     <h4>(Lampara de Mesa)</h4>
     </td>
     <td>
     <INPUT TYPE="button" VALUE="On" onClick="parent.location='/?H2'">
     </td>                                                                                  
     <td>
     <INPUT TYPE="button" VALUE="Off" onClick="parent.location='/?L2'">
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
     <h4>(Interruptor 3)</h4>
     </td>
     <td>
     <INPUT TYPE="button" VALUE="On" onClick="parent.location='/?H3'">
     </td>                                                                                  
     <td>
     <INPUT TYPE="button" VALUE="Off" onClick="parent.location='/?L3'">
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
     <h4>(Interruptor 4)</h4>
     </td>
     <td>
     <INPUT TYPE="button" VALUE="On" onClick="parent.location='/?H4'">
     </td>                                                                                  
     <td>
     <INPUT TYPE="button" VALUE="Off" onClick="parent.location='/?L4'">
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
     <h4>(Interruptor 5)</h4>
     </td>
     <td>
     <INPUT TYPE="button" VALUE="On" onClick="parent.location='/?H5'">
     </td>                                                                                  
     <td>
     <INPUT TYPE="button" VALUE="Off" onClick="parent.location='/?L5'">
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
     <h4>(Interruptor 6)</h4>
     </td>
     <td>
     <INPUT TYPE="button" VALUE="On" onClick="parent.location='/?H6'">
     </td>                                                                                  
     <td>
     <INPUT TYPE="button" VALUE="Off" onClick="parent.location='/?L6'">
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
     <h4>(Interruptor 7)</h4>
     </td>
     <td>
     <INPUT TYPE="button" VALUE="On" onClick="parent.location='/?H7'">
     </td>                                                                                  
     <td>
     <INPUT TYPE="button" VALUE="Off" onClick="parent.location='/?L7'">
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
     <h4>(Interruptor 8)</h4>
     </td>
     <td>
     <INPUT TYPE="button" VALUE="On" onClick="parent.location='/?H8'">
     </td>                                                                                  
     <td>
     <INPUT TYPE="button" VALUE="Off" onClick="parent.location='/?L8'">
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
     <h4>(Interruptor 9)</h4>
     </td>
     <td>
     <INPUT TYPE="button" VALUE="On" onClick="parent.location='/?H9'">
     </td>                                                                                  
     <td>
     <INPUT TYPE="button" VALUE="Off" onClick="parent.location='/?L9'">
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
     <h4>(Interruptor 10)</h4>
     </td>
     <td>
     <INPUT TYPE="button" VALUE="On" onClick="parent.location='/?H10'">
     </td>                                                                                  
     <td>
     <INPUT TYPE="button" VALUE="Off" onClick="parent.location='/?L10'">
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
     <h4>(Interruptor 11)</h4>
     </td>
     <td>
     <INPUT TYPE="button" VALUE="On" onClick="parent.location='/?H11'">
     </td>                                                                                  
     <td>
     <INPUT TYPE="button" VALUE="Off" onClick="parent.location='/?L11'">
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
     <h4>(Interruptor 12)</h4>
     </td>
     <td>
     <INPUT TYPE="button" VALUE="On" onClick="parent.location='/?H12'">
     </td>                                                                                  
     <td>
     <INPUT TYPE="button" VALUE="Off" onClick="parent.location='/?L12'">
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
        <td><h4>(Interruptor General)</h4>
        </td>
	<td>
        <INPUT TYPE="button" VALUE="ON" onClick="parent.location='(TodoOn)'">
        </td>
	<td>
	<INPUT TYPE="button" VALUE="OFF" onClick="parent.location='(TodoOff)'">
	</td>
	<td></td>
	<td></td>
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