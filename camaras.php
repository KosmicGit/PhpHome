<?php
    if (!isset( $_COOKIE['user'])){
        header('Location: ./index.php');
        die();
    } else {
        if (empty($_COOKIE['user'])){
        header('Location: ./index.php');
        die();
        }
    }
    
	include("conexion.php");
	include("variables.php"); 
?>
<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>PhpHome</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/general.css">
  <script type="text/javascript">
            function popUp(URL) {
            window.open(URL, 'IPS', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=525,height=315,left = 390,top = 50');
            }
        </script>
</head>
<body>
<div class="main container">
  <div class="widget">
    <div class="widget-container">
      <div class="tab-container">
        <div class="tab-list" role="tablist">
          <button role="tab" class="tab active" aria-controls="tab-content-01" id="tab-01" tabindex="0" aria-selected="true"><span class="icon material-icons">ondemand_video</span></button>
          <div class="follow"></div>
        </div>
        <div class="tab-content-wrapper">
          <div class="tab-content tab-active" id="tab-content-01" hidden tabindex="0" role="tabpanel" aria-labelledby="tab-01">
          <button class="btn btn-icon-only" onClick="parent.location='general.php'"><span class="icon material-icons">home</span></button>
          <hr>
          <div class="container for-presentation">
            <a href="javascript:popUp('http://homephp.ddns.net:8765/picture/1/frame/')"><button class="btn btn-primary"><span class="icon material-icons">weekend</span><span class="btn-label">Salón</span></button></a>
            <a href="javascript:popUp('http://homephp.ddns.net:8765/picture/2/frame/')"><button class="btn btn-primary"><span class="icon material-icons">kitchen</span><span class="btn-label">Cocina</span></button></a>
          </div>
          <p style="color : #737373; font-family : Verdana, Arial, Helvetica; font-size : 8pt; text-align : center;">Página principal del sistema de gestión domótico. Proyecto realizado por Esteban Vicario y José García</p>
            <p style="color : #737373; font-family : Verdana, Arial, Helvetica; font-size : 8pt; text-align : center;">2021 ©</p>
        </div>

</div>
</div>
</div>
</div>
</div>
</div>
<script  src="js/general.js"></script>
</body>
</html>
