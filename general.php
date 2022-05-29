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
?>

<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>PhpHome</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/general.css">
  <script language="JavaScript">
    function mueveReloj(){
      momentoActual = new Date()
      hora = momentoActual.getHours()
      minuto = momentoActual.getMinutes()
      segundo = momentoActual.getSeconds()
  
      horaImprimible = hora + " : " + minuto + " : " + segundo
  
      document.form_reloj.reloj.value = horaImprimible
  
      setTimeout("mueveReloj()",1000)
    }

    function popUp(URL) {
            window.open(URL, 'IPS', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=525,height=525,left = 390,top = 50');
    }
  </script>
</head>
<body onload="mueveReloj()">
<div class="main container">
  <div class="widget">
    <div class="widget-container">
      <div class="tab-container">
        <div class="tab-list" role="tablist">
          <button role="tab" class="tab active" aria-controls="tab-content-01" id="tab-01" tabindex="0" aria-selected="true"><span class="icon material-icons">home</span></button>
          <button role="tab" class="tab" aria-controls="tab-content-02" id="tab-02" tabindex="0" aria-selected="false"><span class="icon material-icons">launch</span></button>
          <button role="tab" class="tab" aria-controls="tab-content-03" id="tab-03" tabindex="0" aria-selected="false"><span class="icon material-icons">account_circle</span></button>
          <div class="follow"></div>
        </div>
        <div class="tab-content-wrapper">
          <div class="tab-content tab-active" id="tab-content-01" hidden tabindex="0" role="tabpanel" aria-labelledby="tab-01">
            <?php
              $fecha = date("H");
              if ($fecha > 14 && $fecha < 21){
                echo "<h2>Buenas tardes...</h2>";
                echo "<p>Hoy es ".date('d')." de ".date('F')."</p>";
                echo "<center>";
                echo "<img src='images/day.jpg' class='marco' height='250px'>";
                echo "</center>";
              } else if ($fecha < 14){
                echo "<h2>Buenos dias...</h2>";
                echo "<p>Hoy es ".date('d')." de ".date('F')."</p>";
                echo "<center>";
                echo "<img src='images/morning.jpg' class='marco' height='250px'>";
                echo "</center>";
              } else if ($fecha > 21){
                echo "<h2>Buenas noches...</h2>";
                echo "<p>Hoy es ".date('d')." de ".date('F')."</p>";
                echo "<center>";
                echo "<img src='images/night.jpg' class='marco' height='250px'>";
                echo "</center>";
              }
            ?>
            <hr>
              <p>
                <?php
                  echo "<h4>Temperatura: $retorno[2] ºC </h4>";
                ?>
              </p>
              <p>
                <?php
                  echo "<h4>Humedad: $retorno[0] % </h4>";
                ?>
              </p>
              <li>Use <code>Left</code> and <code>Right</code> arrow keys </li>
            </ul>
            </p>
            <p style="color : #737373; font-family : Verdana, Arial, Helvetica; font-size : 8pt; text-align : center;">Página principal del sistema de gestión domótico. Proyecto realizado por Esteban Vicario y José García</p>
            <p style="color : #737373; font-family : Verdana, Arial, Helvetica; font-size : 8pt; text-align : center;">2021 ©</p>
          </div>
          <div class="tab-content" id="tab-content-02" hidden tabindex="0" role="tabpanel" aria-labelledby="tab-02">
            <h2>Servicios</h2>
            <img class="marco" src="images/gear.gif" height="100px">
            <hr>
            <p>Seleccione una opción:</p>
              <p><button onClick="parent.location='./camaras.php'" class="btn btn-primary"><span class="icon material-icons">videocam</span><span class="btn-label">Cámaras</span></button></p>
              <p><button class="btn btn-secondary" onClick="parent.location='luces.php'"><span class="icon material-icons">toggle_on</span><span class="btn-label">Interruptores</span></button></p>
              <p><button class="btn btn-primary"><span class="icon material-icons">thermostat</span><span class="btn-label">Estacion Meteorologica</span></button></p>
              <p style="color : #737373; font-family : Verdana, Arial, Helvetica; font-size : 8pt; text-align : center;">Página principal del sistema de gestión domótico. Proyecto realizado por Esteban Vicario y José García</p>
            <p style="color : #737373; font-family : Verdana, Arial, Helvetica; font-size : 8pt; text-align : center;">2021 ©</p>
          </div>
          
          <div class="tab-content" id="tab-content-03" hidden tabindex="0" role="tabpanel" aria-labelledby="tab-03">
          <?php echo '<h4>¡Hola ' . $_COOKIE["user"] . '!</h4>'; ?>
          <form name="form_reloj"><p>Hora actual del sistema: <input type="text" name="reloj" size="10" onfocus="window.document.form_reloj.reloj.blur()"  style="background-color : Black; color : White; font-family : Verdana, Arial, Helvetica; font-size : 8pt; text-align : center;"></p></form>
          <p>Prueba</p>
          <div class="container for-presentation">
            <button class="btn btn-primary">
              <span class="icon material-icons">
              home
              </span>
              <span class="btn-label">Primary</span>
            </button>
            <a href="javascript:popUp('controlador/adduser.php')"><button class="btn btn-secondary ">
              <span class="icon material-icons">
                account_circle
              </span>
              <span class="btn-label">Añadir Usuario</span>
            </button></a>

            <button class="btn" onClick="parent.location='controlador/logout.php'">
              <span class="icon material-icons">logout</span>
              <span class="btn-label">Cerrar Sesión</span>
            </button>
          </div>
          <p style="color : #737373; font-family : Verdana, Arial, Helvetica; font-size : 8pt; text-align : center;">Página principal del sistema de gestión domótico. Proyecto realizado por Esteban Vicario y José García</p>
            <p style="color : #737373; font-family : Verdana, Arial, Helvetica; font-size : 8pt; text-align : center;">2021 ©</p>
          </div>
        </div>
        <!--tab-content-wrapper -->
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script  src="js/general.js"></script>
</body>
</html>
